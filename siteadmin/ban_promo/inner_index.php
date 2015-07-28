<?php if ( !defined('IS_SITE_ADMIN') ) { header('Location: /404.php'); exit; }
if ( !(hasPermissions('advstat') && hasPermissions('adm')) ) {
    exit;
}

$count = $bpromo->getCountStat();
$stats = $bpromo->getStat();
?>

[<a href="/siteadmin/ban_promo/">�����</a>]<br/><br/>
<strong>���������� ������� <?=$bpromo->info['name']?></strong>

<br><br><br>
<strong>����� �������:</strong> <?=intval($count['views'])?>
<br/>
<strong>����� ������:</strong> <?=intval($count['clicks'])?>

<? if($stats) { ?>
    <br><br>
    <table border="1">
        <tr>
            <td width="100">&nbsp;<strong>����</strong></td>
            <td width="50">&nbsp;<strong>������</strong></td>
            <td width="50">&nbsp;<strong>�����</strong></td>
        </tr>
        <? foreach($stats as $stat ) { ?>
            <tr>
                <td>&nbsp;<?=$stat['c_date']?></td>
                <td>&nbsp;<?=$stat['views']?></td>
                <td>&nbsp;<?=$stat['clicks']?></td>
            </tr>
        <? } ?>
    </table>
<? } ?>

