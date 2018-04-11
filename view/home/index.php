<a href="<?= URL ?>list/create">Add List</a>

<table>
<?php foreach($list as $list) { ?>
		<tr>
			<td><?= $list['list_name']; ?>
        <a href="<?= URL?> 'list/delete/' <?= $list['list_id']; ?>">Delete</a>
				<a href="<?= URL?> 'list/edit/' <?= $list['list_id']; ?>">Edit</a>
				<a href="<?= URL ?>task/create">Add task</a>
      </td>
    </tr>
<?php } ?>
</table>
