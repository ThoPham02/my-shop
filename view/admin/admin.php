<table border="1" width='100%'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>PassWord</th>
        <th>Email</th>
        <th>IsAdmin</th>
    </tr>

    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user->getId(); ?></td>
            <td><?php echo $user->getName(); ?></td>
            <td><?php echo $user->getPassword(); ?></td>
            <td><?php echo $user->getEmail(); ?></td>
            <td><?php echo $user->isAdmin(); ?></td>
        </tr>

    <?php endforeach; ?>
</table>