<?=
'<?xml version="1.0" encoding="UTF-8"?>' .
'<eeml xmlns="http://www.eeml.org/xsd/005"' .
' xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' .
' xsi:schemaLocation="http://www.eeml.org/xsd/005 http://www.eeml.org/xsd/005/005.xsd">' .
'    <environment updated="' . $eeml_status['StateChange']['when'] . '">' .
'  <title>Hacksense Budapest</title>' .
'        <feed>http://vsza.hu/hacksense/eeml_status.xml</feed>' .
'        <status>online</status>' .
'        <description>Hacksense Hackerspace Budapest</description>' .
'        <icon>http://www.hspbp.org/icon.png</icon>' .
'        <website>http://www.hspbp.org/</website>' .
'        <location exposure="indoor" domain="physical" disposition="fixed">' .
'            <name>Hackerspace BP</name>' .
'            <lat>47.501192</lat>' .
'            <lon>19.065088</lon>' .
'            <ele>117</ele>' .
'        </location>' .
'        <data id="0">' .
'            <value>' .($eeml_status['StateChange']['what'] ? '0a0">open' : 'f00">closed')' . '</value>' .
'        </data>' .
'    </environment>' .
'</eeml>' .
?>