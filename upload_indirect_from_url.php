<?php

// Given a DOI or URL to a web page, fetch page, locate PDF and any additional information,
// and add to content store

require_once(dirname(__FILE__) . '/vendor/autoload.php');
require_once(dirname(__FILE__) . '/HtmlDomParser.php');
require_once(dirname(__FILE__) . '/upload.php');

use Sunra\PhpSimple\HtmlDomParser;

$debug = false;

$urls=array(
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/374',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/940',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/4132',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/4066',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/375',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/591',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/610',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/872',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/1303',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/357',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/671',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/651',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/830',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/623',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/662',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/884',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/4153',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/4116',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/688',
'https://revistadeagricultura.inf.br/index.php/revistadeagricultura/article/view/4089',
);

$urls=array(
//'10.5169/seals-269630', // failed

//'https://sammlungen.ub.uni-frankfurt.de/biodiv/content/titleinfo/10807144',

//'https://www.jstage.jst.go.jp/article/lepid/43/1/43_KJ00006598311/_article',

'10.18984/lepid.14.4_80',
'10.18984/lepid.15.1_16',
'10.18984/lepid.25.4_115',
'10.18984/lepid.26.2_45',
'10.18984/lepid.27.1_13',
'10.18984/lepid.29.3_171',
'10.18984/lepid.30.3-4_196',
'10.18984/lepid.32.1-2_49',
'10.18984/LEPID.33.1-2_25',
'10.18984/lepid.33.3-4_168',
'10.18984/lepid.34.1_1',
'10.18984/lepid.37.3_103',
'10.18984/lepid.42.2_107',
'10.18984/lepid.43.1_62',
'10.18984/lepid.45.1_14',
'10.18984/lepid.45.4_245',
'10.18984/lepid.47.1_1',
'10.18984/lepid.48.2_97',
'10.18984/lepid.50.1_17',
'10.18984/lepid.50.3_223',
'10.18984/lepid.51.2_119',
'10.18984/lepid.51.4_287',
'10.18984/lepid.53.4_185',
'10.18984/lepid.54.2_131',
'10.18984/lepid.55.3_225',
'10.18984/lepid.56.2_85',
'10.18984/lepid.56.3_213',
'10.18984/lepid.57.1_1',
'10.18984/lepid.57.2_92',
'10.18984/lepid.60.4_277',
'10.18984/lepid.61.2_137',
'10.18984/lepid.15.2_34',
'10.18984/lepid.27.1_33',
'10.18984/lepid.29.1_1',
'10.18984/lepid.31.1-2_66',
'10.18984/lepid.32.1-2_85',
'10.18984/lepid.37.1_15',
'10.18984/lepid.39.2_99',
'10.18984/lepid.40.2_133',
'10.18984/lepid.40.4_259',
'10.18984/lepid.42.3_163',
'10.18984/lepid.43.1_1',
'10.18984/lepid.43.3_187',
'10.18984/lepid.45.2_79',
'10.18984/lepid.48.4_191',
'10.18984/lepid.59.1_55',
'10.18984/lepid.28.4_143',
'10.18984/lepid.38.2_93',
'10.18984/lepid.38.3_153',
'10.18984/lepid.43.2_95',
'10.18984/lepid.44.3_127',
'10.18984/lepid.44.3_97',
'10.18984/lepid.46.1_1',
'10.18984/lepid.46.4_209',
'10.18984/lepid.47.4_237',
'10.18984/lepid.47.4_243',
'10.18984/lepid.49.1_30',
'10.18984/lepid.49.2_107',
'10.18984/lepid.50.1_35',
'10.18984/lepid.50.1_51',
'10.18984/lepid.50.4_267',
'10.18984/lepid.51.1_77',
'10.18984/lepid.54.2_69',
'10.18984/lepid.55.2_83',
'10.18984/lepid.56.1_6',
'10.18984/lepid.57.4_311',
'10.18984/lepid.57.4_335',
'10.18984/lepid.14.2_43',
'10.18984/lepid.24.1_10',
'10.18984/lepid.27.4_151',
'10.18984/lepid.30.3-4_188',
'10.18984/lepid.31.1-2_60',
'10.18984/lepid.43.2_129',
'10.18984/lepid.46.1_33',
'10.18984/lepid.48.4_243',
'10.18984/lepid.49.1_9',
'10.18984/lepid.51.1_29',
'10.18984/lepid.51.1_49',
'10.18984/lepid.55.4_285',
'10.18984/lepid.27.1_5',
'10.18984/lepid.36.4_167',
'10.18984/lepid.39.2_119',
'10.18984/lepid.42.2_75',
'10.18984/lepid.44.1_10',
'10.18984/lepid.44.2_81',
'10.18984/lepid.44.4_233',
'10.18984/lepid.46.4_255',
'10.18984/lepid.48.2_73',
'10.18984/lepid.49.4_245',
'10.18984/lepid.52.2_101',
'10.18984/lepid.52.3_187',
'10.18984/lepid.53.1_69',
'10.18984/lepid.53.4_193',
'10.18984/lepid.55.1_39',
'10.18984/lepid.55.4_261',
'10.18984/lepid.56.1_63',
'10.18984/lepid.56.4_311',
'10.18984/lepid.27.1_35',
'10.18984/lepid.28.1_35',
'10.18984/lepid.30.3-4_179',
'10.18984/lepid.30.3-4_211',
'10.18984/lepid.33.1-2_40',
'10.18984/LEPID.34.3_130',
'10.18984/lepid.38.1_39',
'10.18984/lepid.39.1_1',
'10.18984/lepid.42.1_37',
'10.18984/lepid.42.2_115',
'10.18984/lepid.43.1_75',
'10.18984/lepid.47.4_209',
'10.18984/lepid.55.2_117',
'10.18984/lepid.55.4_251',
'10.18984/lepid.56.1_19',
'10.18984/lepid.56.4_276',
'10.18984/lepid.56.4_330',
'10.18984/lepid.60.2_93',
'10.18984/lepid.23.2_31',
'10.18984/lepid.23.3-4_68',
'10.18984/lepid.27.1_9',
'10.18984/lepid.30.3-4_127',
'10.18984/lepid.31.1-2_1',
'10.18984/lepid.32.3-4_138',
'10.18984/lepid.37.4_191',
'10.18984/lepid.38.1_21',
'10.18984/lepid.41.4_227',
'10.18984/lepid.46.3_129',
'10.18984/lepid.47.2_108',
'10.18984/lepid.49.3_203',
'10.18984/lepid.53.3_141',
'10.18984/lepid.53.4_204',
'10.18984/lepid.53.4_215',
'10.18984/lepid.60.4_255',
'10.18984/lepid.25.4_96',
'10.18984/lepid.33.3-4_149',
'10.18984/lepid.34.3_111',
'10.18984/lepid.36.3_141',
'10.18984/lepid.36.3_157',
'10.18984/lepid.42.4_255',
'10.18984/lepid.43.3_203',
'10.18984/lepid.52.3_150',
'10.18984/lepid.57.2_127',
'10.18984/lepid.57.2_81',
'10.18984/lepid.14.3_70',
'10.18984/lepid.27.2_49',
'10.18984/lepid.27.3_111',
'10.18984/lepid.29.4_211',
'10.18984/lepid.31.3-4_149',
'10.18984/lepid.43.1_83',
'10.18984/lepid.44.4_157',
'10.18984/lepid.45.3_193',
'10.18984/lepid.47.1_13',
'10.18984/lepid.47.4_269',
'10.18984/lepid.50.4_297',
'10.18984/lepid.51.4_275',
'10.18984/lepid.52.1_37',
'10.18984/lepid.53.4_245',
'10.18984/lepid.54.3_147',
'10.18984/lepid.56.2_131',
'10.18984/lepid.61.4_241',
'10.18984/lepid.24.4_99',
'10.18984/lepid.31.3-4_103',
'10.18984/lepid.35.1_1',
'10.18984/lepid.37.1_1',
'10.18984/lepid.38.2_87',
'10.18984/lepid.41.2_113',
'10.18984/lepid.48.4_271',
'10.18984/lepid.49.3_147',
'10.18984/lepid.51.2_131',
'10.18984/lepid.52.1_45',
'10.18984/lepid.23.3-4_93',
'10.18984/lepid.29.4_215',
'10.18984/lepid.30.1-2_77',
'10.18984/lepid.30.1-2_83',
'10.18984/lepid.32.1-2_63',
'10.18984/lepid.37.4_209',
'10.18984/lepid.44.1_23',
'10.18984/lepid.44.2_60',
'10.18984/lepid.46.3_167',
'10.18984/lepid.47.2_93',
'10.18984/lepid.51.2_111',
'10.18984/lepid.51.4_309',
'10.18984/lepid.54.4_241',
'10.18984/lepid.55.3_147',
'10.18984/lepid.60.3_189',
'10.18984/lepid.28.1_39',
'10.18984/lepid.36.2_77',
'10.18984/lepid.38.2_57',
'10.18984/lepid.45.1_5',
'10.18984/lepid.54.2_73',
'10.18984/lepid.58.4_379',
'10.18984/lepid.27.1_19',
'10.18984/lepid.29.3_164',
'10.18984/lepid.29.3_169',
'10.18984/lepid.42.3_179',
'10.18984/lepid.44.3_103',
'10.18984/lepid.46.2_69',
'10.18984/lepid.51.3_231',
'10.18984/lepid.54.4_229',
'10.18984/lepid.59.2_171',
'10.18984/lepid.29.2_67',
'10.18984/lepid.30.3-4_172',
'10.18984/lepid.34.1_21',
'10.18984/lepid.39.3_183',
'10.18984/lepid.50.2_79',
'10.18984/lepid.52.1_11',
'10.18984/lepid.23.3-4_65',
'10.18984/lepid.27.2_43',
'10.18984/lepid.47.4_223',
'10.18984/lepid.49.3_211',
'10.18984/lepid.49.4_242',
'10.18984/lepid.50.1_41',
'10.18984/lepid.51.3_185',
'10.18984/lepid.54.4_237',
'10.18984/lepid.57.2_111',
'10.18984/lepid.59.4_285',
'10.18984/lepid.28.2_55',
'10.18984/lepid.30.3-4_176',
'10.18984/lepid.35.4_189',
'10.18984/lepid.37.4_185',
'10.18984/lepid.38.1_5',
'10.18984/lepid.43.4_255',
'10.18984/lepid.44.3_107',
'10.18984/lepid.58.1_7',
'10.18984/lepid.59.3_201',
'10.18984/lepid.15.3_56',
'10.18984/lepid.25.3_78',
'10.18984/lepid.27.4_138',
'10.18984/lepid.29.3_117',
'10.18984/lepid.31.3-4_121',
'10.18984/lepid.39.1_83',
'10.18984/lepid.45.2_121',
'10.18984/lepid.46.1_23',
'10.18984/lepid.49.2_104',
'10.18984/lepid.50.3_193',
'10.18984/lepid.51.2_150',
'10.18984/lepid.61.1_1',
'10.18984/lepid.25.1_5',
'10.18984/lepid.27.1_1',
'10.18984/lepid.31.1-2_57',
'10.18984/lepid.32.1-2_29',
'10.18984/lepid.38.4_243',
'10.18984/lepid.40.2_149',
'10.18984/lepid.41.3_155',
'10.18984/lepid.42.3_195',
'10.18984/lepid.54.2_116',
'10.18984/lepid.57.1_49',
'10.18984/lepid.41.2_67',
'10.18984/lepid.45.1_1',
'10.18984/lepid.45.1_17',
'10.18984/lepid.45.3_189',
'10.18984/lepid.48.3_125',
'10.18984/lepid.51.4_251',
'10.18984/lepid.52.3_183',
'10.18984/lepid.59.3_241',
'10.18984/lepid.39.4_241',
'10.18984/lepid.43.3_151',
'10.18984/lepid.43.3_190',
'10.18984/lepid.52.4_245',
'10.18984/lepid.59.2_117',
'10.18984/lepid.29.2_114',
'10.18984/lepid.29.3_153',
'10.18984/lepid.31.1-2_54',
'10.18984/lepid.44.4_226',
'10.18984/lepid.45.2_115',
'10.18984/lepid.47.1_57',
'10.18984/lepid.50.1_60',
'10.18984/lepid.52.4_237',
'10.18984/lepid.55.1_13',
'10.18984/lepid.55.2_107',
'10.18984/lepid.55.3_203',
'10.18984/lepid.55.3_217',
'10.18984/lepid.57.4_371',
'10.18984/lepid.32.3-4_117',
'10.18984/lepid.35.3_93',
'10.18984/lepid.42.2_63',
'10.18984/lepid.43.3_182',
'10.18984/LEPID.50.1_16',
'10.18984/lepid.24.2-3_61',
'10.18984/lepid.41.1_7',
'10.18984/lepid.43.4_260',
'10.18984/lepid.47.1_49',
'10.18984/lepid.47.2_83',
'10.18984/lepid.49.3_159',
'10.18984/lepid.52.4_277',
'10.18984/lepid.56.1_73',
'10.18984/lepid.31.3-4_142',
'10.18984/lepid.33.1-2_44',
'10.18984/lepid.34.3_97',
'10.18984/lepid.39.3_207',
'10.18984/lepid.42.4_249',
'10.18984/lepid.43.3_217',
'10.18984/lepid.50.2_122',
'10.18984/lepid.54.1_11',
'10.18984/lepid.57.1_70',
'10.18984/lepid.27.3_97',
'10.18984/lepid.38.2_107',
'10.18984/lepid.30.3-4_159',
'10.18984/lepid.30.3-4_205',
'10.18984/lepid.36.2_97',
'10.18984/lepid.44.2_68',
'10.18984/lepid.47.3_157',
'10.18984/lepid.51.4_316',
'10.18984/lepid.57.3_149',
'10.18984/lepid.60.4_245',
'10.18984/lepid.30.1-2_93',
'10.18984/lepid.31.1-2_74',
'10.18984/lepid.31.3-4_126',
'10.18984/lepid.33.1-2_26',
'10.18984/lepid.36.4_177',
'10.18984/lepid.38.1_1',
'10.18984/lepid.40.2_141',
'10.18984/lepid.51.3_205',
'10.18984/lepid.29.4_209',
'10.18984/lepid.30.1-2_73',
'10.18984/lepid.43.3_193',
'10.18984/lepid.45.3_157',
'10.18984/lepid.49.4_271',
'10.18984/lepid.50.4_243',
'10.18984/lepid.50.4_264',
'10.18984/lepid.54.4_233',
'10.18984/lepid.32.3-4_160',
'10.18984/lepid.35.1_33',
'10.18984/lepid.42.4_271',
'10.18984/lepid.53.2_119',
'10.18984/lepid.55.2_76',
'10.18984/lepid.27.4_131',
'10.18984/lepid.35.2_75',
'10.18984/lepid.42.4_261',
'10.18984/lepid.43.2_147',
'10.18984/lepid.45.4_255',
'10.18984/lepid.50.1_48',
'10.18984/lepid.53.2_113',
'10.18984/lepid.53.4_241',
'10.18984/lepid.59.2_149',
'10.18984/lepid.33.1-2_61',
'10.18984/lepid.25.4_109',
'10.18984/lepid.44.1_1',
'10.18984/lepid.44.1_25',
'10.18984/lepid.48.1_33',
'10.18984/lepid.57.1_7',
'10.18984/lepid.35.4_174',
'10.18984/lepid.36.2_87',
'10.18984/lepid.50.1_1',
'10.18984/lepid.51.1_75',
'10.18984/lepid.55.1_34',
'10.18984/lepid.56.4_303',
'10.18984/lepid.57.2_132',
'10.18984/lepid.58.2_205',
'10.18984/lepid.15.1_1',
'10.18984/lepid.25.4_87',
'10.18984/lepid.29.2_111',
'10.18984/lepid.29.3_159',
'10.18984/lepid.33.1-2_70',
'10.18984/lepid.38.1_17',
'10.18984/lepid.39.2_95',
'10.18984/lepid.40.1_23',
'10.18984/lepid.43.2_149',
'10.18984/lepid.44.2_49',
'10.18984/lepid.45.2_97',
'10.18984/lepid.46.4_241',
'10.18984/lepid.54.1_5',
'10.18984/lepid.57.1_5',
'10.18984/lepid.33.1-2_1',
'10.18984/lepid.41.3_189',
'10.18984/lepid.43.1_65',
'10.18984/lepid.43.4_257',
'10.18984/lepid.46.2_63',
'10.18984/lepid.23.3-4_75',
'10.18984/lepid.28.2_43',
'10.18984/lepid.49.2_111',
'10.18984/lepid.51.4_319',
'10.18984/lepid.56.4_279',
'10.18984/lepid.57.3_187',
'10.18984/lepid.60.2_125',
'10.18984/lepid.28.3_87',
'10.18984/lepid.32.3-4_168',
'10.18984/lepid.35.3_132',
'10.18984/lepid.36.1_1',
'10.18984/lepid.53.3_137',
'10.18984/lepid.56.3_223',
'10.18984/lepid.30.1-2_69',
'10.18984/lepid.32.1-2_83',
'10.18984/lepid.35.2_77',
'10.18984/lepid.46.2_103',
'10.18984/lepid.49.2_135',
'10.18984/lepid.58.4_405',
'10.18984/lepid.31.1-2_63',
'10.18984/lepid.32.3-4_164',
'10.18984/lepid.33.1-2_65',
'10.18984/lepid.43.3_221',
'10.18984/lepid.46.1_17',
'10.18984/lepid.51.1_19',
'10.18984/lepid.58.2_157',
'10.18984/lepid.49.3_213',
'10.18984/lepid.55.1_26',
'10.18984/lepid.55.1_29',
'10.18984/lepid.55.2_111',
'10.18984/lepid.58.1_4',
'10.18984/lepid.58.4_410',
'10.18984/lepid.29.2_69',
'10.18984/lepid.30.1-2_91',
'10.18984/lepid.31.1-2_29',
'10.18984/lepid.33.1-2_51',
'10.18984/lepid.43.3_225',
'10.18984/lepid.46.3_141',
'10.18984/lepid.52.4_250',
'10.18984/lepid.25.4_111',
'10.18984/lepid.34.3_127',
'10.18984/lepid.45.3_171',
'10.18984/lepid.51.1_1',
'10.18984/lepid.53.4_209',
'10.18984/LEPID.27.3_96',
'10.18984/lepid.31.3-4_133',
'10.18984/lepid.43.4_237',
'10.18984/lepid.48.3_133',
'10.18984/lepid.59.4_267',
'10.18984/lepid.45.1_11',
'10.18984/lepid.45.4_251',
'10.18984/lepid.55.4_266',
'10.18984/lepid.58.1_1',
'10.18984/lepid.25.4_105',
'10.18984/lepid.32.3-4_147',
'10.18984/LEPID.35.1_45',
'10.18984/lepid.39.4_259',
'10.18984/lepid.51.3_247',
'10.18984/lepid.52.1_51',
'10.18984/lepid.55.4_256',
'10.18984/lepid.15.1_20',
'10.18984/lepid.31.3-4_153',
'10.18984/lepid.44.2_55',
'10.18984/lepid.44.4_221',
'10.18984/lepid.46.1_31',
'10.18984/lepid.49.2_115',
'10.18984/lepid.60.4_289',
'10.18984/lepid.49.3_199',
'10.18984/lepid.25.4_113',
'10.18984/lepid.28.1_41',
'10.18984/lepid.43.2_144',
'10.18984/lepid.44.2_77',
'10.18984/lepid.46.2_45',
'10.18984/lepid.50.4_247',
'10.18984/lepid.55.3_209',
'10.18984/lepid.35.1_28',
'10.18984/lepid.42.2_81',
'10.18984/LEPID.42.4_248',
'10.18984/lepid.46.4_247',
'10.18984/lepid.53.4_225',
'10.18984/lepid.58.2_162',
);

// redo
$urls = array(
'10.21248/contrib.entomol.33.1.3-195',
'10.21248/contrib.entomol.32.1.39-188',
);

$force = false;
//$force = true;

$parse_pdf = true; // default, will fail if PDF has problems
//$parse_pdf = false; // don't attempt to parse the PDF, use if PDFs are a bit ropey

foreach ($urls as $url)
{
	$go = true;
	
	$have_pdf = false;
	
	if (preg_match('/^10\.\d+/', $url))
	{
		$url = 'https://doi.org/' . $url;
	}
	
	if (source_parent_url_in_db($url) && !$force)
	{
		echo "Have $url already\n";
		$go = false;
	}
	
	if (source_url_in_db($url) && !$force)
	{
		echo "Have $url already\n";
		$go = false;
	}
	if ($go)
	{
		echo "\nURL=$url\n\n";
	
		$html = get($url);
		
		//$html = substr($html, 0, 32000);
				
		// meta tags, need to convert to linked data for a subset of tags that
		// will add value
		$dom = HtmlDomParser::str_get_html($html);
		
		if ($dom)
		{	
			$source = new stdclass;
			$source->parent_url = $url;
			$source->url = $url;
			
			if (preg_match('/https?:\/\/(dx\.)?doi.org\/(?<doi>10\.\d+.*)/', $url, $m))
			{
				$source->doi = $m['doi'];
			}
			
			$ogurl = '';
			
			$journal = '';
				
			// meta
			foreach ($dom->find('meta') as $meta)
			{
				if (isset($meta->name))
				{
					echo $meta->name . ' ' . $meta->content . "\n";
				}

				if (isset($meta->property))
				{
					echo $meta->property . ' ' . $meta->content . "\n";
				}
				
				switch ($meta->name)
				{			
					case 'citation_doi':
					case 'bepress_citation_doi':
						$source->doi = $meta->content;
						break;
		
					case 'citation_title':
					case 'bepress_citation_title':
						$source->title = $meta->content;
						break;
						
					case 'citation_pdf_url':
					case 'bepress_citation_pdf_url':
					case 'citation_additional_version_url': // https://www.revistas.usp.br
						$source->url = $meta->content;
						$source->url = str_replace('&amp;', '&', $source->url);
						
						// jouirnal-specific hacks
						// https://www1.montpellier.inra.fr/CBGP/acarologia/article.php?id=4710
						$source->url = str_replace('inrae.r', 'inrae.fr', $source->url);
						
						$have_pdf = true;
						break;
						
					case 'dc.rights':
					case 'DC.rights':
						if (preg_match('/creativecommons.org/', $meta->content))
						{
							$source->license = $meta->content;
						}
						break;
							
					// J-STAGE
					case 'access_control':
						$source->license = $meta->content;
						break;
					
					case 'eprints.document_url':
						if (preg_match('/\.pdf$/', $meta->content))
						{
							$source->url = $meta->content;
							$have_pdf = true;
						}
						break;
						
					case 'citation_journal_title':
						$journal = $meta->content;
						break;
												
					default:
						break;
				}
				
				// e.g. https://catalog.lib.kyushu-u.ac.jp/opac_detail_md/?lang=1&amode=MD100000&bibid=2398
				// key info such as DOI and access rights are in table
				switch ($meta->property)
				{				
					case 'citation_doi':
						$source->doi = $meta->content;
						break;
						
					case 'citation_pdf_url':
						$source->url = $meta->content;
						$source->url = str_replace('&amp;', '&', $source->url);
						
						$have_pdf = true;
						break;
						
					case 'og:url':
						$ogurl = $meta->content;
						break;					
						
					default:
						break;
				}
							
			}
			
			// hacks
			if ($journal == 'Asian Myrmecology') // citation_pdf_url is broken
			{
				$source->url = $url;
				$have_pdf = false;
			}
			
			// license------------------------------------------------------------------------
			
			// Figshare
			foreach ($dom->find('div a') as $a)
			{
				if (preg_match('/rightsstatements.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
	
			// https://www.nmnhs.com/
			foreach ($dom->find('div a[rel=license noopener]') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// PLoS
			foreach ($dom->find('div[class=articleinfo] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// SciElo
			foreach ($dom->find('div[class=container-license] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// Springer
			foreach ($dom->find('div[id=rightslink-content] a[rel=license]') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// Acarologia
			foreach ($dom->find('div a[rel=license]') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
	
			// https://jibs.modares.ac.ir/article-36-76913-en.html
			foreach ($dom->find('td a[rel=license]') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
	
			// https://natuurtijdschriften.nl/pub/1008066
			foreach ($dom->find('p[class=inline_md] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// https://revistas.ucm.es/index.php/MBOT/article/view/79286
			foreach ($dom->find('div[class=pkp_block block_custom] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// PMC
			foreach ($dom->find('div[class=license half_rhythm] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// Hystrix
			foreach ($dom->find('div[class=articleTopInner] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// https://oldri.ues.edu.sv
			foreach ($dom->find('td[valign=top] span[class=ep_document_citation] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}

			// https://www.eje.cz/artkey/eje-200002-0017_Cladistic_systematics_of_the_genus_Amphimallon_Coleoptera_Scarabaeidae_Melolonthinae.php
			foreach ($dom->find('p[class=ctr ccinfo] a') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			// https://www.ujecology.com/abstract/first-data-of-cossidae-lepidoptera-of-the-central-african-republic-5563.html
			foreach ($dom->find('p a[rel=license]') as $a)
			{
				if (preg_match('/creativecommons.org/', $a->href))
				{
					$source->license = $a->href;
				}
			}
			
			
			// DOI----------------------------------------------------------------------------
	
			// https://www.nmnhs.com/
			foreach ($dom->find('div[class=box_emph_e] a') as $a)
			{
				if (preg_match('/\/(10.48027.*)/', $a->href, $m))
				{
					if (!isset($source->doi))
					{
						$source->doi = $m[1];
					}
				}
			}
			
			// https://www.aemnp.eu
			foreach ($dom->find('div[class=articleDetailDoi] a') as $a)
			{
				if (preg_match('/\/(10.1515.*)/', $a->href, $m))
				{
					if (!isset($source->doi))
					{
						$source->doi = $m[1];
					}
				}
			}
			
			/*
			<div class="views-field views-field-biblio-doi">    <span class="views-label views-label-biblio-doi">doi: </span>    <span class="field-content">https://doi.org/10.26028/cybium/2023-034</span>  </div> */
			foreach ($dom->find('div[class=views-field views-field-biblio-doi] span[class=field-content]') as $span)
			{
				if (preg_match('/\/(10.26028.*)/', $span->plaintext, $m))
				{
					if (!isset($source->doi))
					{
						$source->doi = $m[1];
					}
				}
			}
			
			// https://www.worlddragonfly.org/article/13887890-2010-9748375/
			foreach ($dom->find('div[class=sqs-block-content] p a') as $a)
			{				
				if (preg_match('/https?:\/\/doi.org\/(.*)/', $a->href, $m))
				{
					if (!isset($source->doi))
					{
						$source->doi = $m[1];
					}
				}
			}

	
			// PDF----------------------------------------------------------------------------
			
			if (!$have_pdf)
			{
				// if PDF link not given in standard metadata go fishing
				foreach ($dom->find('li[class=article__navbar__col] a[aria-label= PDF]') as $a)
				{
					if (preg_match('/epdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}
		
				// https://www.zin.ru/journals/trudyzin
				foreach ($dom->find('p[class=paper_pdf] a[id=download_pdf]') as $a)
				{
					if ($ogurl != '' && preg_match('/trudyzin/', $ogurl))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = str_replace('../', 'https://www.zin.ru/journals/trudyzin/', $a->href);
					}				
				}
				
				foreach ($dom->find('a[id=download_pdf]') as $a)
				{								
					if ($ogurl != '' && preg_match('/zsr/', $ogurl))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = preg_replace('/^\.\//', 'https://www.zin.ru/journals/zsr/', $a->href);
					}				
				}
				
				
				// kmkjournals.com
				foreach ($dom->find('div[class=col-xs-9] p a') as $a)
				{
					if (preg_match('/\/upload\/PDF\/ArthropodaSelecta\//', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://kmkjournals.com/' . $a->href;
					}
					if (preg_match('/\/upload\/PDF\/RJT\//', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://kmkjournals.com/' . $a->href;
					}
				}
		
				// acarina
				foreach ($dom->find('div[class=b-docs-item] a') as $a)
				{
					if (preg_match('/\/upload\/.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://acarina.utmn.ru' . $a->href;
					}
				}		
				
				// taprobanica
				foreach ($dom->find('div[itemtype=http://schema.org/Thing] a') as $a)
				{
					if (preg_match('/pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}		
		
				// taprobanica
				foreach ($dom->find('div[itemtype=http://schema.org/SaleEvent] a') as $a)
				{
					if (preg_match('/pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}	
		
				foreach ($dom->find('div[style=text-align:right] strong a') as $a)
				{
					if (preg_match('/www.binran.ru.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}	
				
				// Elsevier (doesn't work)
				foreach ($dom->find('li[class=ViewPDF] a') as $a)
				{
					//$source->url = 'https://www.sciencedirect.com' . $a->href;
				}
				
				// Taiwania
				foreach ($dom->find('input[name=pdfdownload]') as $input)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					$source->url = 'https://taiwania.ntu.edu.tw/pdf/' . $input->file;
				}	
				
				// https://karstenia.fi
				foreach ($dom->find('div[class=entry-content] a[class=pdf-ikoni]') as $a)
				{
					if (preg_match('/www.funga.fi.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
						$source->url = str_replace(' ', '%20', $source->url);
					}
				}	
				
				// PMC
				foreach ($dom->find('li[class=pdf-link other_item] a') as $a)
				{
					if (preg_match('/pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://www.ncbi.nlm.nih.gov' . $a->href;
					}
				}	
				
				// Ingenta (fails due to CDN)
				foreach ($dom->find('ul[class=right-col-download contain] li a') as $a)
				{
					if (preg_match('/pdf/', $a->{'data-popup'}))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://www.ingentaconnect.com' . str_replace('&amp;', '&', $a->{'data-popup'});
					}
				}	
	
				foreach ($dom->find('div[class=media-wrapper clearfix row] a') as $a)
				{
					if (preg_match('/\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}	
	
				foreach ($dom->find('div[class=row] div[class=col-sm-9] a') as $a)
				{
					if (preg_match('/pdf/', $a->href))
					{
						foreach ($dom->find('base') as $base)
						{
							if (isset($base->href))
							{
								echo "PDF matched line [" . __LINE__ . "]\n";
								$source->url = $base->href . $a->href;
								$source->url = str_replace('//', '/', $source->url);
							}
						}
					}
				}	
	
				// Hystrix
				foreach ($dom->find('div[class=abstractButtons] a') as $a)
				{
					if (preg_match('/pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}	
				
				// https://www.aemnp.eu
				foreach ($dom->find('div[class=articleAttachment row] a') as $a)
				{
					if (preg_match('/\/data\/article.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://www.aemnp.eu' . $a->href;
					}
				}	
				
				// Smithsonian Handle
				foreach ($dom->find('div[class=file-link] a') as $a)
				{
					if (preg_match('/.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://repository.si.edu' . $a->href;
					}
				}	
	
				foreach ($dom->find('div[class=wp-block-file] a') as $a)
				{
					if (preg_match('/uploads.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}	
				
				// https://oldri.ues.edu.sv
				foreach ($dom->find('td[valign=top] a[class=ep_document_link]') as $a)
				{
					if (preg_match('/\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}
				
				// https://www.senckenberg.de/de/wissenschaft/publikationen/wissenschaftliche-zeitschriften/vertebrate-zoology/archiv/2019-69-2/vz-69-2-02/
				foreach ($dom->find('p a') as $a)
				{
					if (preg_match('/\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						
						// Do we have a complete URL
						if (preg_match('/^http/', $a->href))
						{
							$source->url = $a->href;
						}
						else
						{
							// Nope, so try and fix this
							if ($ogurl != '')
							{
								if (preg_match('/worlddragonfly/', $ogurl))
								{
									$source->url = 'https://www.worlddragonfly.org' . $a->href;
								}
							}
						}
					}
				}
				
				// https://sfi-cybium.fr/fr/review-butis-teleostei-butidae-indo-pacific-islands-description-three-new-species
				foreach ($dom->find('iframe[class=pdf]') as $iframe)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					$source->url = $iframe->plaintext;
				}
			
				// https://biosoil.ru/FEE/Publication/2678
				foreach ($dom->find('p a') as $i)
				{
					if (preg_match('/storage\/entities.*\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://biosoil.ru' . $a->href;
					}
				}
				
				// https://www.ujecology.com/abstract/first-data-of-cossidae-lepidoptera-of-the-central-african-republic-5563.html
				foreach ($dom->find('nav a[class=nav-link]') as $a)
				{
					if (preg_match('/\.pdf/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = $a->href;
					}
				}
				
				// https://www.degruyter.com/pub/doi/10.1515/mammalia-2013-0101/html
				foreach ($dom->find('div[class=alternateForms d-none] a') as $a)
				{
					if (preg_match('/pdf\?licenseType=free/', $a->href))
					{
						echo "PDF matched line [" . __LINE__ . "]\n";
						$source->url = 'https://www.degruyter.com' . $a->href;
						$source->license =  "free";
					}
				}
				
				// http://publication.nhmus.hu/folent/cikkreszletes.php?idhoz=7152
				foreach ($dom->find('div p form input[name=filen]') as $input)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					$source->url = $input->value;
				}

				// mnhn.fr
				foreach ($dom->find('a[title=Download full article in PDF format]') as $a)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					$source->url = 'https://sciencepress.mnhn.fr' . $a->href;
					
					foreach ($dom->find('p a[title=DOI (Digital Object Identifier)]') as $a)
					{
						if (preg_match('/https?:\/\/doi.org\/(.*)/', $a->href, $m))
						{
							$source->doi = $m[1];
						}
					}
				}
				
				/*
				// http://entsocjournal.yabee.com.tw/Preview.aspx?SendDOI=10.6660/TESFE.2000024
				foreach ($dom->find('div a') as $a)
				{
					if (preg_match('/pdf/i', $a->href))
					{
						$source->url = 'http://entsocjournal.yabee.com.tw' . $a->href;
					}
				}
				*/
			
				foreach ($dom->find('a[class=basteriabutton]') as $a)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					if (preg_match('/pdf/i', $a->href))
					{
						$source->url = $a->href;
					}
				}

				foreach ($dom->find('td[id=titleinfoDownloads] a[class=resourceLink]') as $a)
				{
					echo "PDF matched line [" . __LINE__ . "]\n";
					if (preg_match('/pdf/i', $a->href))
					{
						$source->url = 'https://sammlungen.ub.uni-frankfurt.de' . $a->href;
					}
				}
									
			}					
					
																		
			//----------------------------------------------------------------------------
			
			if ($source->url != $url)
			{
				$source->url = str_replace(' ', '%20', $source->url);
			
				$source->content_filename = get_filename_from_url($source->url, 'pdf');											
				$source->content_filename = $config['tmp'] . '/' . $source->content_filename;
				
				print_r($source);			
			
				if (1)
				{
					//$command = "curl -L -o '$source->content_filename' '$source->url'";
					
					// see also https://stackoverflow.com/questions/56413290/getting-curl-92-http-2-stream-1-was-not-closed-cleanly-internal-error-err
					
					$command = "curl --insecure --max-time 1024 -k -L --user-agent \"Mozilla/5.0 (Linux; Android 10; SM-G996U Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36\" -o '$source->content_filename' '$source->url'";
				}
				else
				{
		//			$command = "curl_chrome116 -L  -o '$source->content_filename' '$source->url'";
		
				
					$command = "'/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'"
						. "  --headless --disable-gpu --dump-dom"
						. " --user-agent=\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.50 Safari/537.36\""
						. " '" . $source->url . "'"
						. ' > ' . $source->content_filename;
				
				}
				
				
				$result_code = 0;
				
				echo $command . "\n";
				system($command, $result_code);
				
				// check OK
				if ($result_code == 0)
				{
					store_pdf($source, $parse_pdf, $debug);
				}
				
				$rand = rand(100000, 300000);
				echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
				usleep($rand);
			}
			
		}
		else
		{
			echo "Could not parse HTML\n";
			exit();
		}
	}
}

?>
