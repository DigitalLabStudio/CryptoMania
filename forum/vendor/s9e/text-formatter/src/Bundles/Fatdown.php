<?php

/*
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2017 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Bundles;
abstract class Fatdown extends \s9e\TextFormatter\Bundle
{
	protected static $parser;
	protected static $renderer;
	public static function getParser()
	{
		return \unserialize('O:24:"s9e\\TextFormatter\\Parser":4:{s:16:"' . "\0" . '*' . "\0" . 'pluginsConfig";a:10:{s:9:"Autoemail";a:5:{s:8:"attrName";s:5:"email";s:10:"quickMatch";s:1:"@";s:6:"regexp";s:39:"/\\b[-a-z0-9_+.]+@[-a-z0-9.]*[a-z0-9]/Si";s:7:"tagName";s:5:"EMAIL";s:11:"regexpLimit";i:50000;}s:8:"Autolink";a:5:{s:8:"attrName";s:3:"url";s:6:"regexp";s:132:"#\\b(?:ftp|https?)://\\S(?>[^\\s()\\[\\]\\x{FF01}-\\x{FF0F}\\x{FF1A}-\\x{FF20}\\x{FF3B}-\\x{FF40}\\x{FF5B}-\\x{FF65}]|\\([^\\s()]*\\)|\\[\\w*\\])++#Siu";s:7:"tagName";s:3:"URL";s:10:"quickMatch";s:3:"://";s:11:"regexpLimit";i:50000;}s:7:"Escaper";a:4:{s:10:"quickMatch";s:1:"\\";s:6:"regexp";s:29:"/\\\\[-!#()*+.:<>@[\\\\\\]^_`{|}]/";s:7:"tagName";s:3:"ESC";s:11:"regexpLimit";i:50000;}s:10:"FancyPants";a:2:{s:8:"attrName";s:4:"char";s:7:"tagName";s:2:"FP";}s:12:"HTMLComments";a:5:{s:8:"attrName";s:7:"content";s:10:"quickMatch";s:4:"<!--";s:6:"regexp";s:22:"/<!--(?!\\[if).*?-->/is";s:7:"tagName";s:2:"HC";s:11:"regexpLimit";i:50000;}s:12:"HTMLElements";a:5:{s:10:"quickMatch";s:1:"<";s:6:"prefix";s:4:"html";s:6:"regexp";s:393:"#<(?>/((?:a(?>bbr)?|br?|code|d(?>[dlt]|el|iv)|em|hr|i(?>mg|ns)?|li|ol|pre|r(?:[bp]|tc?|uby)|s(?>(?>pan|trong|u[bp]))?|t(?:[dr]|able|body|foot|h(?>ead)?)|ul?))|((?:a(?>bbr)?|br?|code|d(?>[dlt]|el|iv)|em|hr|i(?>mg|ns)?|li|ol|pre|r(?:[bp]|tc?|uby)|s(?>(?>pan|trong|u[bp]))?|t(?:[dr]|able|body|foot|h(?>ead)?)|ul?))((?>\\s+[a-z][-a-z0-9]*(?>\\s*=\\s*(?>"[^"]*"|\'[^\']*\'|[^\\s"\'=<>`]+))?)*+)\\s*/?)\\s*>#i";s:7:"aliases";a:6:{s:1:"a";a:2:{s:0:"";s:3:"URL";s:4:"href";s:3:"url";}s:2:"hr";a:1:{s:0:"";s:2:"HR";}s:2:"em";a:1:{s:0:"";s:2:"EM";}s:1:"s";a:1:{s:0:"";s:1:"S";}s:6:"strong";a:1:{s:0:"";s:6:"STRONG";}s:3:"sup";a:1:{s:0:"";s:3:"SUP";}}s:11:"regexpLimit";i:50000;}s:12:"HTMLEntities";a:5:{s:8:"attrName";s:4:"char";s:10:"quickMatch";s:1:"&";s:6:"regexp";s:38:"/&(?>[a-z]+|#(?>[0-9]+|x[0-9a-f]+));/i";s:7:"tagName";s:2:"HE";s:11:"regexpLimit";i:50000;}s:8:"Litedown";a:1:{s:18:"decodeHtmlEntities";b:1;}s:10:"MediaEmbed";a:4:{s:10:"quickMatch";s:1:":";s:6:"regexp";s:39:"/\\b(?>spotify:|https?:\\/\\/)[^["\'\\s]+/Si";s:7:"tagName";s:5:"MEDIA";s:11:"regexpLimit";i:50000;}s:10:"PipeTables";a:3:{s:16:"overwriteEscapes";b:1;s:17:"overwriteMarkdown";b:1;s:10:"quickMatch";s:1:"|";}}s:14:"registeredVars";a:2:{s:9:"urlConfig";a:1:{s:14:"allowedSchemes";s:20:"/^(?:ftp|https?)$/Di";}s:10:"mediasites";a:13:{s:12:"bandcamp.com";s:8:"bandcamp";s:15:"dailymotion.com";s:11:"dailymotion";s:12:"facebook.com";s:8:"facebook";s:12:"liveleak.com";s:8:"liveleak";s:14:"soundcloud.com";s:10:"soundcloud";s:16:"open.spotify.com";s:7:"spotify";s:16:"play.spotify.com";s:7:"spotify";s:8:"spotify:";s:7:"spotify";s:9:"twitch.tv";s:6:"twitch";s:9:"vimeo.com";s:5:"vimeo";s:7:"vine.co";s:4:"vine";s:11:"youtube.com";s:7:"youtube";s:8:"youtu.be";s:7:"youtube";}}s:14:"' . "\0" . '*' . "\0" . 'rootContext";a:2:{s:7:"allowed";a:2:{i:0;i:65527;i:1;i:32576;}s:5:"flags";i:8;}s:13:"' . "\0" . '*' . "\0" . 'tagsConfig";a:74:{s:8:"BANDCAMP";a:7:{s:10:"attributes";a:4:{s:8:"album_id";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:8:"!^\\d+$!D";}}}s:8:"required";b:0;}s:8:"track_id";R:90;s:9:"track_num";R:90;s:3:"url";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:59:"s9e\\TextFormatter\\Parser\\AttributeFilters\\UrlFilter::filter";s:6:"params";a:3:{s:9:"attrValue";N;s:9:"urlConfig";N;s:6:"logger";N;}}}s:8:"required";b:0;}}s:11:"filterChain";a:3:{i:0;a:2:{s:8:"callback";s:51:"s9e\\TextFormatter\\Plugins\\MediaEmbed\\Parser::scrape";s:6:"params";a:3:{s:3:"tag";N;i:0;a:2:{i:0;a:3:{i:0;a:1:{i:0;s:23:"!bandcamp\\.com/album/.!";}i:1;a:1:{i:0;s:25:"!/album=(?\'album_id\'\\d+)!";}i:2;a:1:{i:0;s:8:"album_id";}}i:1;a:3:{i:0;a:1:{i:0;s:23:"!bandcamp\\.com/track/.!";}i:1;a:3:{i:0;s:29:"!"album_id":(?\'album_id\'\\d+)!";i:1;s:31:"!"track_num":(?\'track_num\'\\d+)!";i:2;s:25:"!/track=(?\'track_id\'\\d+)!";}i:2;a:3:{i:0;s:8:"album_id";i:1;s:8:"track_id";i:2;s:9:"track_num";}}}s:8:"cacheDir";N;}}i:1;a:2:{s:8:"callback";s:42:"s9e\\TextFormatter\\Parser::filterAttributes";s:6:"params";a:4:{s:3:"tag";N;s:9:"tagConfig";N;s:14:"registeredVars";N;s:6:"logger";N;}}i:2;a:2:{s:8:"callback";s:67:"s9e\\TextFormatter\\Plugins\\MediaEmbed\\Parser::hasNonDefaultAttribute";s:6:"params";a:1:{s:3:"tag";N;}}}s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:3089;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";a:2:{i:0;i:49360;i:1;i:16384;}}s:1:"C";a:6:{s:11:"filterChain";a:1:{i:0;R:132;}s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:66;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:0;s:7:"allowed";a:2:{i:0;i:0;i:1;i:0;}}s:4:"CODE";a:7:{s:10:"attributes";a:1:{s:4:"lang";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:23:"/^[- +,.0-9A-Za-z_]+$/D";}}}s:8:"required";b:0;}}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";a:10:{s:1:"C";i:1;s:2:"EM";i:1;s:6:"STRONG";i:1;s:3:"URL";i:1;s:5:"EMAIL";i:1;s:6:"html:b";i:1;s:9:"html:code";i:1;s:6:"html:i";i:1;s:11:"html:strong";i:1;s:6:"html:u";i:1;}s:12:"fosterParent";R:173;s:5:"flags";i:4436;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:1;s:7:"allowed";R:158;}s:11:"DAILYMOTION";a:8:{s:10:"attributes";a:2:{s:2:"id";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:17:"!^[A-Za-z0-9]+$!D";}}}s:8:"required";b:1;}s:3:"url";R:98;}s:22:"attributePreprocessors";a:2:{i:0;a:3:{i:0;s:3:"url";i:1;s:94:"!dailymotion\\.com/(?:live/|swf/|user/[^#]+#video=|(?:related/\\d+/)?video/)(?\'id\'[A-Za-z0-9]+)!";i:2;a:2:{i:0;s:0:"";i:1;s:2:"id";}}i:1;a:3:{i:0;s:3:"url";i:1;s:24:"!^(?\'id\'[A-Za-z0-9]+)$!D";i:2;R:201;}}s:11:"filterChain";a:3:{i:0;a:2:{s:8:"callback";s:55:"s9e\\TextFormatter\\Parser::executeAttributePreprocessors";s:6:"params";a:2:{s:3:"tag";N;s:9:"tagConfig";N;}}i:1;a:2:{s:8:"callback";s:51:"s9e\\TextFormatter\\Plugins\\MediaEmbed\\Parser::scrape";s:6:"params";a:3:{s:3:"tag";N;i:0;a:0:{}s:8:"cacheDir";N;}}i:2;R:132;}s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";R:148;}s:3:"DEL";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:512;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:0;s:7:"allowed";R:83;}s:2:"EM";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:2;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:0;s:7:"allowed";a:2:{i:0;i:65521;i:1;i:32576;}}s:5:"EMAIL";a:7:{s:10:"attributes";a:1:{s:5:"email";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:61:"s9e\\TextFormatter\\Parser\\AttributeFilters\\EmailFilter::filter";s:6:"params";a:1:{s:9:"attrValue";N;}}}s:8:"required";b:1;}}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:514;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";a:2:{i:0;i:53191;i:1;i:32576;}}s:3:"ESC";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:1616;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:6;s:7:"allowed";R:158;}s:8:"FACEBOOK";a:8:{s:10:"attributes";a:3:{s:2:"id";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:8:"@^\\d+$@D";}}}s:8:"required";b:1;}s:4:"type";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:10:"#^video$#D";}}}s:8:"required";b:0;}s:3:"url";R:98;}s:22:"attributePreprocessors";a:3:{i:0;a:3:{i:0;s:3:"url";i:1;s:135:"@/(?!(?:apps|developers|graph)\\.)[-\\w.]*facebook\\.com/(?:[/\\w]+/permalink|(?!pages/|groups/).*?)(?:/|fbid=|\\?v=)(?\'id\'\\d+)(?=$|[/?&#])@";i:2;R:201;}i:1;a:3:{i:0;s:3:"url";i:1;s:20:"#/(?\'type\'video)s?/#";i:2;a:2:{i:0;s:0:"";i:1;s:4:"type";}}i:2;a:3:{i:0;s:3:"url";i:1;s:15:"@^(?\'id\'\\d+)$@D";i:2;R:201;}}s:11:"filterChain";R:207;s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";R:148;}s:2:"FP";a:7:{s:10:"attributes";a:1:{s:4:"char";a:1:{s:8:"required";b:1;}}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:7;s:7:"allowed";a:2:{i:0;i:49344;i:1;i:16448;}}s:2:"H1";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";R:173;s:12:"fosterParent";R:173;s:5:"flags";i:260;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:2;s:7:"allowed";R:234;}s:2:"H2";R:304;s:2:"H3";R:304;s:2:"H4";R:304;s:2:"H5";R:304;s:2:"H6";R:304;s:2:"HC";a:7:{s:10:"attributes";a:1:{s:7:"content";R:296;}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:3153;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:6;s:7:"allowed";R:158;}s:2:"HE";R:294;s:2:"HR";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:2:{s:11:"closeParent";R:173;s:5:"flags";i:3349;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:1;s:7:"allowed";R:301;}s:3:"IMG";a:7:{s:10:"attributes";a:3:{s:3:"alt";a:1:{s:8:"required";b:0;}s:3:"src";a:2:{s:11:"filterChain";R:99;s:8:"required";b:1;}s:5:"title";R:325;}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:0;s:7:"allowed";R:301;}s:2:"LI";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";a:12:{s:1:"C";i:1;s:2:"EM";i:1;s:6:"STRONG";i:1;s:3:"URL";i:1;s:5:"EMAIL";i:1;s:6:"html:b";i:1;s:9:"html:code";i:1;s:6:"html:i";i:1;s:11:"html:strong";i:1;s:6:"html:u";i:1;s:2:"LI";i:1;s:7:"html:li";i:1;}s:12:"fosterParent";R:173;s:5:"flags";i:264;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:3;s:7:"allowed";R:83;}s:4:"LIST";a:7:{s:10:"attributes";a:2:{s:5:"start";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:67:"s9e\\TextFormatter\\Parser\\AttributeFilters\\NumericFilter::filterUint";s:6:"params";R:243;}}s:8:"required";b:0;}s:4:"type";R:163;}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";R:173;s:12:"fosterParent";R:173;s:5:"flags";i:3460;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:1;s:7:"allowed";a:2:{i:0;i:65352;i:1;i:32576;}}s:8:"LIVELEAK";a:8:{s:10:"attributes";a:2:{s:2:"id";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:15:"!^[a-f_0-9]+$!D";}}}s:8:"required";b:1;}s:3:"url";R:98;}s:22:"attributePreprocessors";a:2:{i:0;a:3:{i:0;s:3:"url";i:1;s:41:"!liveleak\\.com/view\\?i=(?\'id\'[a-f_0-9]+)!";i:2;R:201;}i:1;a:3:{i:0;s:3:"url";i:1;s:22:"!^(?\'id\'[a-f_0-9]+)$!D";i:2;R:201;}}s:11:"filterChain";R:207;s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";R:148;}s:5:"MEDIA";a:6:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:54:"s9e\\TextFormatter\\Plugins\\MediaEmbed\\Parser::filterTag";s:6:"params";a:3:{s:3:"tag";N;s:6:"parser";N;s:10:"mediasites";N;}}}s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:513;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:14;s:7:"allowed";a:2:{i:0;i:65527;i:1;i:32512;}}s:5:"QUOTE";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";R:173;s:12:"fosterParent";R:173;s:5:"flags";i:268;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:1;s:7:"allowed";R:83;}s:10:"SOUNDCLOUD";a:8:{s:10:"attributes";a:5:{s:2:"id";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:39:"@^(?:[-/\\w]+/[-/\\w]+|^[^/]+/[^/]+$)$@iD";}}}s:8:"required";b:1;}s:11:"playlist_id";a:2:{s:11:"filterChain";R:263;s:8:"required";b:0;}s:12:"secret_token";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:11:"@^[-\\w]+$@D";}}}s:8:"required";b:0;}s:8:"track_id";R:418;s:3:"url";R:98;}s:22:"attributePreprocessors";a:5:{i:0;a:3:{i:0;s:3:"url";i:1;s:84:"@https?://(?:api\\.)?soundcloud\\.com/(?!pages/)(?\'id\'[-/\\w]+/[-/\\w]+|^[^/]+/[^/]+$)@i";i:2;R:201;}i:1;a:3:{i:0;s:3:"url";i:1;s:52:"@api\\.soundcloud\\.com/playlists/(?\'playlist_id\'\\d+)@";i:2;a:2:{i:0;s:0:"";i:1;s:11:"playlist_id";}}i:2;a:3:{i:0;s:3:"url";i:1;s:89:"@api\\.soundcloud\\.com/tracks/(?\'track_id\'\\d+)(?:\\?secret_token=(?\'secret_token\'[-\\w]+))?@";i:2;a:3:{i:0;s:0:"";i:1;s:8:"track_id";i:2;s:12:"secret_token";}}i:3;a:3:{i:0;s:3:"url";i:1;s:81:"@soundcloud\\.com/(?!playlists|tracks)[-\\w]+/[-\\w]+/(?=s-)(?\'secret_token\'[-\\w]+)@";i:2;a:2:{i:0;s:0:"";i:1;s:12:"secret_token";}}i:4;a:3:{i:0;s:3:"url";i:1;s:46:"@^(?\'id\'(?:[-/\\w]+/[-/\\w]+|^[^/]+/[^/]+$))$@iD";i:2;R:201;}}s:11:"filterChain";a:3:{i:0;R:208;i:1;a:2:{s:8:"callback";s:51:"s9e\\TextFormatter\\Plugins\\MediaEmbed\\Parser::scrape";s:6:"params";a:3:{s:3:"tag";N;i:0;a:2:{i:0;a:3:{i:0;a:1:{i:0;s:56:"@soundcloud\\.com/(?!playlists/\\d|tracks/\\d)[-\\w]+/[-\\w]@";}i:1;a:1:{i:0;s:36:"@soundcloud:tracks:(?\'track_id\'\\d+)@";}i:2;a:1:{i:0;s:8:"track_id";}}i:1;a:3:{i:0;a:1:{i:0;s:27:"@soundcloud\\.com/\\w+/sets/@";}i:1;a:1:{i:0;s:44:"@soundcloud://playlists:(?\'playlist_id\'\\d+)@";}i:2;a:1:{i:0;s:11:"playlist_id";}}}s:8:"cacheDir";N;}}i:2;R:132;}s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";R:148;}s:7:"SPOTIFY";a:8:{s:10:"attributes";a:3:{s:4:"path";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:44:"!^(?:(?:album|artist|track|user)/[-/\\w]+)$!D";}}}s:8:"required";b:0;}s:3:"uri";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:61:"!^(?:spotify:(?:album|artist|user|track(?:set)?):[-,:\\w]+)$!D";}}}s:8:"required";b:0;}s:3:"url";R:98;}s:22:"attributePreprocessors";a:2:{i:0;a:3:{i:0;s:3:"url";i:1;s:62:"!(?\'uri\'spotify:(?:album|artist|user|track(?:set)?):[-,:\\w]+)!";i:2;a:2:{i:0;s:0:"";i:1;s:3:"uri";}}i:1;a:3:{i:0;s:3:"url";i:1;s:74:"!(?:open|play)\\.spotify\\.com/(?\'path\'(?:album|artist|track|user)/[-/\\w]+)!";i:2;a:2:{i:0;s:0:"";i:1;s:4:"path";}}}s:11:"filterChain";a:4:{i:0;R:208;i:1;R:213;i:2;R:132;i:3;R:139;}s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";R:148;}s:6:"STRONG";R:228;s:3:"SUB";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:0;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:0;s:7:"allowed";R:234;}s:3:"SUP";R:513;s:5:"TABLE";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:359;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:1;s:7:"allowed";a:2:{i:0;i:65344;i:1;i:32581;}}s:5:"TBODY";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";a:21:{s:1:"C";i:1;s:2:"EM";i:1;s:6:"STRONG";i:1;s:3:"URL";i:1;s:5:"EMAIL";i:1;s:6:"html:b";i:1;s:9:"html:code";i:1;s:6:"html:i";i:1;s:11:"html:strong";i:1;s:6:"html:u";i:1;s:5:"TBODY";i:1;s:2:"TD";i:1;s:2:"TH";i:1;s:5:"THEAD";i:1;s:2:"TR";i:1;s:10:"html:tbody";i:1;s:7:"html:td";i:1;s:10:"html:tfoot";i:1;s:7:"html:th";i:1;s:10:"html:thead";i:1;s:7:"html:tr";i:1;}s:12:"fosterParent";R:173;s:5:"flags";i:3456;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:8;s:7:"allowed";a:2:{i:0;i:65344;i:1;i:32580;}}s:2:"TD";a:7:{s:10:"attributes";a:1:{s:5:"align";a:2:{s:11:"filterChain";a:2:{i:0;a:2:{s:8:"callback";s:10:"strtolower";s:6:"params";R:243;}i:1;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:34:"/^(?>center|justify|left|right)$/D";}}}s:8:"required";b:0;}}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";a:14:{s:1:"C";i:1;s:2:"EM";i:1;s:6:"STRONG";i:1;s:3:"URL";i:1;s:5:"EMAIL";i:1;s:6:"html:b";i:1;s:9:"html:code";i:1;s:6:"html:i";i:1;s:11:"html:strong";i:1;s:6:"html:u";i:1;s:2:"TD";i:1;s:2:"TH";i:1;s:7:"html:td";i:1;s:7:"html:th";i:1;}s:12:"fosterParent";R:173;s:5:"flags";i:256;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:9;s:7:"allowed";R:83;}s:2:"TH";a:7:{s:10:"attributes";R:558;s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:570;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:9;s:7:"allowed";a:2:{i:0;i:64499;i:1;i:32576;}}s:5:"THEAD";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";R:173;s:12:"fosterParent";R:173;s:5:"flags";i:3456;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:8;s:7:"allowed";R:554;}s:2:"TR";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";a:16:{s:1:"C";i:1;s:2:"EM";i:1;s:6:"STRONG";i:1;s:3:"URL";i:1;s:5:"EMAIL";i:1;s:6:"html:b";i:1;s:9:"html:code";i:1;s:6:"html:i";i:1;s:11:"html:strong";i:1;s:6:"html:u";i:1;s:2:"TD";i:1;s:2:"TH";i:1;s:2:"TR";i:1;s:7:"html:td";i:1;s:7:"html:th";i:1;s:7:"html:tr";i:1;}s:12:"fosterParent";R:173;s:5:"flags";i:3456;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:10;s:7:"allowed";a:2:{i:0;i:65344;i:1;i:32578;}}s:6:"TWITCH";a:8:{s:10:"attributes";a:5:{s:7:"channel";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:8:"#^\\w+$#D";}}}s:8:"required";b:0;}s:7:"clip_id";R:630;s:1:"t";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:27:"#^(?:(?:\\d+h)?\\d+m)?\\d+s$#D";}}}s:8:"required";b:0;}s:3:"url";R:98;s:8:"video_id";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:8:"#^\\d+$#D";}}}s:8:"required";b:0;}}s:22:"attributePreprocessors";a:4:{i:0;a:3:{i:0;s:3:"url";i:1;s:47:"#twitch\\.tv/(?:videos|\\w+/v)/(?\'video_id\'\\d+)?#";i:2;a:2:{i:0;s:0:"";i:1;s:8:"video_id";}}i:1;a:3:{i:0;s:3:"url";i:1;s:44:"#www\\.twitch\\.tv/(?!videos/)(?\'channel\'\\w+)#";i:2;a:2:{i:0;s:0:"";i:1;s:7:"channel";}}i:2;a:3:{i:0;s:3:"url";i:1;s:32:"#t=(?\'t\'(?:(?:\\d+h)?\\d+m)?\\d+s)#";i:2;a:2:{i:0;s:0:"";i:1;s:1:"t";}}i:3;a:3:{i:0;s:3:"url";i:1;s:56:"#clips\\.twitch\\.tv/(?:(?\'channel\'\\w+)/)?(?\'clip_id\'\\w+)#";i:2;a:3:{i:0;s:0:"";i:1;s:7:"channel";i:2;s:7:"clip_id";}}}s:11:"filterChain";R:509;s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";R:148;}s:3:"URL";a:7:{s:10:"attributes";a:2:{s:5:"title";R:325;s:3:"url";R:327;}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:247;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:4;s:7:"allowed";R:251;}s:5:"VIMEO";a:8:{s:10:"attributes";a:2:{s:2:"id";a:2:{s:11:"filterChain";R:91;s:8:"required";b:1;}s:3:"url";R:98;}s:22:"attributePreprocessors";a:2:{i:0;a:3:{i:0;s:3:"url";i:1;s:50:"!vimeo\\.com/(?:channels/[^/]+/|video/)?(?\'id\'\\d+)!";i:2;R:201;}i:1;a:3:{i:0;s:3:"url";i:1;s:15:"!^(?\'id\'\\d+)$!D";i:2;R:201;}}s:11:"filterChain";R:207;s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";R:148;}s:4:"VINE";a:8:{s:10:"attributes";a:2:{s:2:"id";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:10:"!^[^/]+$!D";}}}s:8:"required";b:1;}s:3:"url";R:98;}s:22:"attributePreprocessors";a:2:{i:0;a:3:{i:0;s:3:"url";i:1;s:25:"!vine\\.co/v/(?\'id\'[^/]+)!";i:2;R:201;}i:1;a:3:{i:0;s:3:"url";i:1;s:17:"!^(?\'id\'[^/]+)$!D";i:2;R:201;}}s:11:"filterChain";R:207;s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";R:148;}s:7:"YOUTUBE";a:8:{s:10:"attributes";a:4:{s:2:"id";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:62:"s9e\\TextFormatter\\Parser\\AttributeFilters\\RegexpFilter::filter";s:6:"params";a:2:{s:9:"attrValue";N;i:0;s:11:"!^[-\\w]+$!D";}}}s:8:"required";b:1;}s:4:"list";a:2:{s:11:"filterChain";R:725;s:8:"required";b:0;}s:1:"t";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:65:"s9e\\TextFormatter\\Parser\\AttributeFilters\\TimestampFilter::filter";s:6:"params";R:243;}}s:8:"required";b:0;}s:3:"url";R:98;}s:22:"attributePreprocessors";a:5:{i:0;a:3:{i:0;s:3:"url";i:1;s:69:"!youtube\\.com/(?:watch.*?v=|v/|attribution_link.*?v%3D)(?\'id\'[-\\w]+)!";i:2;R:201;}i:1;a:3:{i:0;s:3:"url";i:1;s:25:"!youtu\\.be/(?\'id\'[-\\w]+)!";i:2;R:201;}i:2;a:3:{i:0;s:3:"url";i:1;s:25:"@[#&?]t=(?\'t\'\\d[\\dhms]*)@";i:2;R:670;}i:3;a:3:{i:0;s:3:"url";i:1;s:23:"!&list=(?\'list\'[-\\w]+)!";i:2;a:2:{i:0;s:0:"";i:1;s:4:"list";}}i:4;a:3:{i:0;s:3:"url";i:1;s:18:"!^(?\'id\'[-\\w]+)$!D";i:2;R:201;}}s:11:"filterChain";a:3:{i:0;R:208;i:1;a:2:{s:8:"callback";s:51:"s9e\\TextFormatter\\Plugins\\MediaEmbed\\Parser::scrape";s:6:"params";a:3:{s:3:"tag";N;i:0;a:1:{i:0;a:3:{i:0;a:1:{i:0;s:14:"!/shared\\?ci=!";}i:1;a:1:{i:0;s:19:"!/vi/(?\'id\'[-\\w]+)!";}i:2;a:1:{i:0;s:2:"id";}}}s:8:"cacheDir";N;}}i:2;R:132;}s:12:"nestingLimit";i:10;s:5:"rules";R:144;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:5;s:7:"allowed";R:148;}s:9:"html:abbr";a:7:{s:10:"attributes";a:1:{s:5:"title";R:325;}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:515;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:0;s:7:"allowed";R:234;}s:6:"html:b";R:228;s:7:"html:br";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:3201;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:0;s:7:"allowed";a:2:{i:0;i:65344;i:1;i:32576;}}s:9:"html:code";R:151;s:7:"html:dd";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";a:12:{s:1:"C";i:1;s:2:"EM";i:1;s:6:"STRONG";i:1;s:3:"URL";i:1;s:5:"EMAIL";i:1;s:6:"html:b";i:1;s:9:"html:code";i:1;s:6:"html:i";i:1;s:11:"html:strong";i:1;s:6:"html:u";i:1;s:7:"html:dd";i:1;s:7:"html:dt";i:1;}s:12:"fosterParent";R:173;s:5:"flags";i:256;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:11;s:7:"allowed";R:83;}s:8:"html:del";R:222;s:8:"html:div";a:7:{s:10:"attributes";a:1:{s:5:"class";R:325;}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:404;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:1;s:7:"allowed";R:83;}s:7:"html:dl";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:359;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:1;s:7:"allowed";a:2:{i:0;i:65344;i:1;i:32584;}}s:7:"html:dt";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:791;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:11;s:7:"allowed";R:593;}s:6:"html:i";R:228;s:8:"html:img";a:7:{s:10:"attributes";a:5:{s:3:"alt";R:325;s:6:"height";R:325;s:3:"src";R:98;s:5:"title";R:325;s:5:"width";R:325;}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:782;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:0;s:7:"allowed";R:786;}s:8:"html:ins";R:222;s:7:"html:li";R:332;s:7:"html:ol";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:359;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:1;s:7:"allowed";R:363;}s:8:"html:pre";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";R:173;s:12:"fosterParent";R:173;s:5:"flags";i:276;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:1;s:7:"allowed";R:234;}s:7:"html:rb";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";R:173;s:12:"fosterParent";R:173;s:5:"flags";i:256;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:12;s:7:"allowed";R:234;}s:7:"html:rp";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";a:12:{s:1:"C";i:1;s:2:"EM";i:1;s:6:"STRONG";i:1;s:3:"URL";i:1;s:5:"EMAIL";i:1;s:6:"html:b";i:1;s:9:"html:code";i:1;s:6:"html:i";i:1;s:11:"html:strong";i:1;s:6:"html:u";i:1;s:7:"html:rp";i:1;s:7:"html:rt";i:1;}s:12:"fosterParent";R:173;s:5:"flags";i:256;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:13;s:7:"allowed";R:234;}s:7:"html:rt";R:845;s:8:"html:rtc";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:841;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:12;s:7:"allowed";a:2:{i:0;i:65521;i:1;i:32608;}}s:9:"html:ruby";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:515;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:0;s:7:"allowed";a:2:{i:0;i:65521;i:1;i:32624;}}s:9:"html:span";a:7:{s:10:"attributes";R:809;s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:515;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:0;s:7:"allowed";R:234;}s:11:"html:strong";R:228;s:8:"html:sub";R:513;s:8:"html:sup";R:513;s:10:"html:table";R:519;s:10:"html:tbody";R:526;s:7:"html:td";a:7:{s:10:"attributes";a:2:{s:7:"colspan";R:325;s:7:"rowspan";R:325;}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:570;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:9;s:7:"allowed";R:83;}s:10:"html:tfoot";a:6:{s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"closeParent";a:20:{s:1:"C";i:1;s:2:"EM";i:1;s:6:"STRONG";i:1;s:3:"URL";i:1;s:5:"EMAIL";i:1;s:6:"html:b";i:1;s:9:"html:code";i:1;s:6:"html:i";i:1;s:11:"html:strong";i:1;s:6:"html:u";i:1;s:5:"TBODY";i:1;s:2:"TD";i:1;s:2:"TH";i:1;s:5:"THEAD";i:1;s:2:"TR";i:1;s:10:"html:tbody";i:1;s:7:"html:td";i:1;s:7:"html:th";i:1;s:10:"html:thead";i:1;s:7:"html:tr";i:1;}s:12:"fosterParent";R:173;s:5:"flags";i:3456;}s:8:"tagLimit";i:5000;s:9:"bitNumber";i:8;s:7:"allowed";R:554;}s:7:"html:th";a:7:{s:10:"attributes";a:3:{s:7:"colspan";R:325;s:7:"rowspan";R:325;s:5:"scope";R:325;}s:11:"filterChain";R:152;s:12:"nestingLimit";i:10;s:5:"rules";R:570;s:8:"tagLimit";i:5000;s:9:"bitNumber";i:9;s:7:"allowed";R:593;}s:10:"html:thead";R:596;s:7:"html:tr";R:602;s:6:"html:u";R:228;s:7:"html:ul";R:829;}}');
	}
	public static function getRenderer()
	{
		return \unserialize('O:42:"s9e\\TextFormatter\\Bundles\\Fatdown\\Renderer":2:{s:19:"enableQuickRenderer";b:1;s:9:"' . "\0" . '*' . "\0" . 'params";a:0:{}}');
	}
}