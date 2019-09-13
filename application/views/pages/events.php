<main>
        <section class="conferences-section">
            <div class="wrapper">
                <h2>
                    <span>List of Events</span>
                    List of Events
                </h2>
    
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
                        
                    </thead>
                    <tbody>
                    <?php foreach( $events as $row ) {  ?>
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
                            <a href="<?php echo base_url("events/add/". $row["event_id"]); ?>">Yes</a> / <a href="">No</a>                           
                             </td>
                        </tr>
                    <?php } ?>

                        
                    </tbody>
                </table>
            </div>
        </section>
    </main>