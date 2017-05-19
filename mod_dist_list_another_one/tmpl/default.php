<?php 
// No direct access
defined('_JEXEC') or die; ?>

<table>
    <? foreach ($dists as $dist): ?>
        <tr>
            <td><a href='?edit_dist=<?=$dist->id; ?>'><?= $dist->company_name; ?></a></td>
            <td><button><a href='?delete_dist=<?=$dist->id; ?>'>Delete</a></button></td>
        </tr>
    <? endforeach; ?>
</table>