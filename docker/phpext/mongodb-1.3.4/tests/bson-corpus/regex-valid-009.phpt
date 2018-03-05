--TEST--
Regular Expression type: Regular expression as value of $regex query operator with $options
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$canonicalBson = hex2bin('270000000B247265676578007061747465726E000002246F7074696F6E73000300000069780000');
$canonicalExtJson = '{"$regex" : {"$regularExpression" : { "pattern": "pattern", "options" : ""}}, "$options" : "ix"}';

// Canonical BSON -> Native -> Canonical BSON 
echo bin2hex(fromPHP(toPHP($canonicalBson))), "\n";

// Canonical BSON -> Canonical extJSON 
echo json_canonicalize(toCanonicalExtendedJSON($canonicalBson)), "\n";

// Canonical extJSON -> Canonical BSON 
echo bin2hex(fromJSON($canonicalExtJson)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
270000000b247265676578007061747465726e000002246f7074696f6e73000300000069780000
{"$regex":{"$regularExpression":{"pattern":"pattern","options":""}},"$options":"ix"}
270000000b247265676578007061747465726e000002246f7074696f6e73000300000069780000
===DONE===