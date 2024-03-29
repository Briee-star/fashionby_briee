<?php
        $title ='View Records';

        require_once 'includes/header.php'; 
        require_once 'db/conn.php';
        require_once 'includes/auth_check.php';

        $result = $crud->getSubscribers();
    ?>


    <table class="table table-bordered">
        <tr> 
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
        </tr>
        <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $r['subscriber_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['emailaddress'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['subscriber_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['subscriber_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');" 
                    href="delete.php?id=<?php echo $r['subscriber_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php }?>
    </table>

    <br>
    <br>
    <br>
    <?php require_once 'includes/footer.php'; ?>