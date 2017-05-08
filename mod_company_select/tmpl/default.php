<?
defined('_JEXEC') or die;

JHtml::_('jquery.framework');
JHtml::script(Juri::base() . 'modules/mod_company_select/js/company_select.js');
?>
<div class="well">
    <h6 class="page-header">Select a Country</h3>
    <select class="country-select">
        <option value="223">United States</option>
        <? foreach ($countries as $id => $country): ?>
            <? if ($country->countries_id !== 223) :?>
                <option value="<?= $id; ?>"><?= $country['country']; ?></option>
            <? endif; ?>
        <? endforeach; ?>
    </select>
    <h6 class="page-header">Select a Distributor</h3>
    <? foreach($countries as $id => $country): ?>
        <div id="dist-<?= $id ?>" class="dists <? if ($id !== 223): ?>hidden<? endif; ?>">
            <select size="<?= max(2, count($country['distributors'])); ?>">
                <? foreach($country['distributors'] as $did => $distributor): ?>
                    <option class='distributor-option' value="<?= $did; ?>"><?= $distributor->company_name; ?></option>
                <? endforeach; ?>
            </select>
        </div>
    <? endforeach; ?>
    <? foreach($countries as $id => $country): ?>
        <? foreach($country['distributors'] as $did => $distributor): ?>
            <table width="531" border="1" bordercolor="#000000" id="logo-<?= $did; ?>" class="logos hidden">
                <tr>
                    <td>
                        <table width="100%" border="0">
                            <td>
                                <? if (!empty($distributor->logo)): ?>
                                    <? if (!empty($distributor->website)): ?>
                                        <a href="http://<?= $distributor->website; ?>" target="_blank">
                                            <img src="<?= $imagepath . '/' . $distributor->logo; ?>" width="150" border="0">
                                        </a>
                                    <? else: ?>
                                        <img src="<?= $imagepath . '/' . $distributor->logo; ?>" width="150" border="0">
                                    <? endif; ?>
                                <? else: ?>
                                    <td colspan="2"><?= $distributor->company_name; ?></td>
                                <? endif; ?>
                            </td>
                            <td>
                                <div><?= $distributor->company_name; ?></div>
                                <? if (!empty($distributor->billaddr)): ?>
                                    <div><?= $distributor->billaddr; ?></div>
                                <? endif; ?>
                                <? if (!empty($distributor->billcity)): ?>
                                    <div><?= $distributor->billcity; ?> <?= $distributor->billstate; ?> <?= $distributor->billzip; ?></div>
                                <? endif; ?>
                                <div><?= $distributor->billcountry; ?></div>
                                <div>Phone: <?= $distributor->billphone; ?></div>
                                <? if (!empty($distributor->billfax)): ?>
                                    <div>Fax: <?= $distributor->billfax; ?></div>
                                <? endif; ?>
                                <div><a href="mailto:<?= $distributor->email; ?>"><?= $distributor->email; ?></a></div>
                                <div><a href="http://<?= $distributor->website; ?>" target="_blank"><?= $distributor->website; ?></a></div>
                            </td>
                        </table>
                    </td>
                </tr>
            </table>
        <? endforeach; ?>
    <? endforeach; ?>
</div>
