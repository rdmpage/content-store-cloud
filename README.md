# Hash-based content store in the cloud

A simple content store that uses hashes to identify content, and the files are stored in the cloud (e.g., [Backblaze B2](https://www.backblaze.com/cloud-storage). Similar to what I did for BioNames, but influenced by Ben Trask's ideas [Principles of Content Addressing](https://bentrask.com/?q=hash://sha256/98493caa8b37eaa26343bbf73f232597a3ccda20498563327a4c3713821df892) - hat tip to Jorrit Poelen's Preston for the link. See also boettiger-lab/data-tracker and [Hash Archive (beta)](https://hash-archive.carlboettiger.info).

The respository populates the content store, see rdmpage/content-store-cloud-client for a simple client.

## PDFs

PDFs are the only content currently stored. Idea is to retrieve a PDF, either from the web or locally, extract whatever metadata we can using smalot/pdfparser, then upload to the content store. We send two files, one is the PDF, the other is a JSON file with metadata for the file. Both are stored in a filename based on the SHA-1 hash of the PDF file name. We use the first six characters of the SHA-1 hash to create a set of nested directories to store the files.

## Cloud store access

The store uses [Backblaze B2](https://www.backblaze.com/cloud-storage). To help explore and debug it is useful to have the store mounted locally, I use [CloudMounter](https://cloudmounter.net) to access the files locally on my machine.

This is also a handy way to add content to the store. Rather than use the B2 API directly, we can simply copy a file to the mounted content store and let CloudMounter copy it to the cloud.

## Interesting examples

## BioNames having wrong hash

For example, http://www.cassidae.uni.wroc.pl/Warchalowski_Pachybrachis%20review.pdf has a SHA1 of `31eca8c9a86aa285e4d621fbc6a9c4d5821b19e3` in BioNames, but loading into the content store we get a SHA1 of `9805065c4a3aea9c7c00c25e5fc1f1f9940366ac`. The later is also the SHA1 hash of the file downloaded from BioNames (i.e., the file stored under `31eca8c9a86aa285e4d621fbc6a9c4d5821b19e3`), suggesting there is a bug in the BioNames code.

## PDF evolution

The same PDF can be modified by adding cover pages, etc., and this seems to overwrite the PDF fingerprint, e.g. the following three sources of a PDF have two different hashes:

- https://eprints.utas.edu.au/13231/1/1937-Hogg-DEntrecasteaux.pdf
- https://core.ac.uk/download/pdf/33322478.pdf
- https://figshare.utas.edu.au/ndownloader/files/43234248/1

### PDFs with different hashes but same fingerprints

This might happen because PDF's have metadata updated(?)

- Fingerprint `c2e3e0167f3fe4ef2fb45a718d6be323` for `007f578162ae7f6f64db66a90a18f4beebdc31fd` and `716cc665d4214367217f7045539021d0c15b0f76`

### ResearchGate

ResearchGate adds its own `rgid` field, which we can use to detect PDFs from that source. This typically doesn’t affect the fingerprint (either the first or the second) but does change the hash. For example, fingerprint `d0d8960bbb5a29bf9f06984b7718dd89` has SHA1 hash `e11e417f794452f653689298a6f42800b77b2bb6` and `4ac8b3dc205325fbf4fd2d9058385f9317155bec`.



## Harvesting

### BioNames

```
SELECT CONCAT("'http://bionames.org/sha1/",sha1, "',") FROM sha1 WHERE pdf LIKE "http://www.nev.nl/tve/pdf%";
```
### Hard to scrape websites

Look at https://github.com/lwthiker/curl-impersonate and https://www.zenrows.com/blog/bypass-cloudflare

