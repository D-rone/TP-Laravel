<table border="1">
    <tr>
        <th>ID</th>
        <th>Login</th>
        <th>Password</th>
        <th colspan="2">Action</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
            <?php echo  $user->id ?>
        </td>
        <td>
            <?php echo  $user->login ?>
        </td>
        <td>
            <?php echo  $user->pwd ?>
        </td>
        <td>
            <form action="/deleteUser" method="post">
                <input type="hidden" name="_token" value=<?php echo csrf_token(); ?> />
                <input type="hidden" name="id" value="<?php echo $user->id ?>">
                <button type="submit">Delete</button>
            </form>
        </td>
        <td>
            <form action="/updateUserForm" method="get">
                <input type="hidden" name="_token" value=<?php echo csrf_token(); ?> />
                <input type="hidden" name="id" value="<?php echo $user->id ?>">
                <button type="submit">Update</button>
            </form>
        </td>
    </tr>
    <?php endforeach;  ?>
</table>
<form action="/createUser" method="get">
    <input type="submit" value="Create User" />
</form>