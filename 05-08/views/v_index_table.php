<h1>Chat</h1>
<a href="index.php?c=add">Add</a>
<a href="index.php"> | View as List</a>
<hr>
<br>
<table>
    <?php foreach($messages as $message): ?>
        <tr>
            <td><?=$message['name']?></td>
            <td><?=$message['dt_add']?></td>
            <td><?=$message['text']?></td>
        </tr>
    <?php endforeach; ?>
</table>

<style>
    td {
        border: 1px solid #ccc;
        padding: 1rem;
    }
</style>
