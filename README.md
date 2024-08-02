# Hash-based content store in the cloud

A simple content store that uses hashes to identify content, and the files are stored in the cloud (e.g., [Backblaze B2](https://www.backblaze.com/cloud-storage). Similar to what I did for BioNames, but influenced by Ben Trask's ideas [Principles of Content Addressing](https://bentrask.com/?q=hash://sha256/98493caa8b37eaa26343bbf73f232597a3ccda20498563327a4c3713821df892) - hat tip to Jorrit Poelen's Preston for the link. See also boettiger-lab/data-tracker and [Hash Archive (beta)](https://hash-archive.carlboettiger.info).

The respository populates the content store, see rdmpage/content-store-cloud-client for a simple client.

## PDFs

PDFs are the only content currently stored. Idea is to retrieve a PDF, either from the web or locally, extract whatever metadata we can using smalot/pdfparser, then upload to the content store. We send two files, one is the PDF, the other is a JSON file with metadata for the file. Both are stored in a filename based on the SHA-1 hash of the PDF file name. We use the first six characters of the SHA-1 hash to create a set of nested directories to store the files.

## Cloud store access

The store uses [Backblaze B2](https://www.backblaze.com/cloud-storage). To help explore and debug it is useful to have the store mounted locally, I use [CloudMounter](https://cloudmounter.net) to access the files locally on my machine.

This is also a handy way to add content to the store. Rather than use the B2 API directly, we can simply copy a file to the mounted content store and let CloudMounter copy it to the cloud.


