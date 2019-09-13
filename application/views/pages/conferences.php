<main>
        <section class="conferences-section">
            <div class="wrapper">
                <h2>
                    <span>List of Conferences</span>
                    List of Conferences
                </h2>
                <?php if ($isadmin) { ?>
                <form method="POST">
                    <button type="submit" name="add_conference" class="pull-right btn gradient">Add Conference</button>
                </form>
                <?php } ?>

                <?php if (isset($_POST['add_conference'])) { ?>

                <form method="POST" name="myForm" action="addEventUtil.php">
                    <div class="wrapper">
                        <div class="row">
                        <input type="text" name="conference" placeholder="Enter conference" required>
                        <input type="text" name="description" placeholder="Enter description" required>
                        <input type="text" name="date" placeholder="Enter date" required>
                        <input type="text" name="sede" placeholder="Enter sede" required>
                        </div>
                        
                        <button type="submit" class="gradient pull-right btn" onclick=validatContactUs() name="conf_submit">Submit Conferencec</button>
                    </div>
                </form>
                <?php } else { ?>
                <table>
                    <thead>
                        <td>
                            Conferences
                        </td>
                        <td>
                            Description
                        </td>
                        <td>
                            Date
                        </td>
                        <td>
                            Sede
                        </td>
                        <td>
                            Confirmation
                        </td>
                        <?php if ($isadmin) { ?>
                        <td>
                            Delete
                        </td>
                        <?php } ?>
                        
                    </thead>
                    <tbody>
                    <?php foreach($conferences as $row) {  ?>
                        <tr>
                            <td>
                            <?php echo $row["conference"] ;?>
                            </td>
                            <td>
                            <?php echo $row["description"] ;?>                            
                            </td>
                            <td>
                            <?php echo $row["date"] ;?>                            
                            </td>
                            <td>
                            <?php echo $row["sede"] ;?>                            
                            </td>
                            <td>
                            <?php echo $row["confirmation"] ;?>
                            <a href="<?php echo base_url("conferences/add/". $row["conference_id"]); ?>">Yes</a> / <a href="">No</a>                           
                             </td>
                             <?php if ($isadmin) { ?>
                            <td>
                               <!-- <?php echo $row["DELETE"] ;?> -->
                            <a href="addEventUtil.php?deleteconference=1&EID=<?php echo $row["conference_id"]; ?>&email=<?php echo $_SESSION["email"]; ?>">Delete</a>   
                            </td>
                             <?php } ?>
                           
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        </section>
    </main>