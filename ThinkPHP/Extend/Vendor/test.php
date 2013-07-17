
<?php  
//echo "<h1>hello! hyp</h1>";
use Thrift\Transport\TSocket as TSocket;  
use Thrift\Transport\TBufferedTransport as TBufferedTransport;  
use Thrift\Protocol\TBinaryProtocol as TBinaryProtocol;  

//require_once "classes/dict/Types.php";
use Dict\TEntryInfo as TEntryInfo;  
use Dict\ThriftSearchClient as SearchClient;  
  
// autoload function  
function __autoload($class) {  
    // convert namespace to full file path  
//    $class = 'classes/'.str_replace('\\', '/', $class). '.php';  
    $class = str_replace('\\', '/', $class). '.php';  
    echo $class;
    echo "\n";
    require_once($class);  
}  

define('THRIFT_HOST', '192.168.1.106');
define('THRIFT_PORT', '9090');
  
$thriftHost = THRIFT_HOST; //Thrift接口服务器IP  
$thriftPort = THRIFT_PORT;	//Thrift接口服务器端口  
  
$socket = new TSocket($thriftHost, $thriftPort);  
  
$socket->setSendTimeout(10000);  
$socket->setRecvTimeout(20000);  

$transport = new TBufferedTransport($socket);  
$protocol = new TBinaryProtocol($transport);  
$client = new SearchClient($protocol);  
$transport->open();  
$socket->setDebug(TRUE);  

$info = new TEntryInfo();
$info->value = "a";
$info->command = 0;
$info->dictid = 0x8117;

$return = $client->Search($info);

//$info->entrytype = 1;
//$info->entryline = 7;

//$return = $client->getWordInfo($info);

var_dump($return);
//$return = $client->getTag($info);

?>
