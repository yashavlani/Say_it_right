<main>
        <section class="conferences-section">
            <div class="wrapper">
                <h2>
                    <span>List of My Conferences</span>
                    List of My Conferences
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
                        <td>
                            Remove
                        </td>
                    </thead>
                    <tbody>
                        <?php foreach ($conferences as $erow) {
                        ?>
                        <tr>
                            <td>
                            <?php echo $erow["conference"] ;?>
                            </td>
                            <td>
                            <?php echo $erow["description"] ;?>
                            </td>
                            <td>
                            <?php echo $erow["date"] ;?>
                            </td>
                            <td>
                            <?php echo $erow["sede"] ;?>
                            </td>
                            <td>
                                Confirm
                            </td>
                            <td>
                            <a href="<?php echo base_url("conferences/remove/". $erow["conference_id"]); ?>">Remove</a>   
                            </td>
                        </tr>
                    <?php } ?>
                        <!-- <tr>
                            <td>
                                Vocalization
                            </td>
                            <td>
                                A sound, you use your voice to make it, especially by singing it.
                            </td>
                            <td>
                                25 April 2019
                            </td>
                            <td>
                                Texas
                            </td>
                            <td>
                                Confirm
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Social Communication
                            </td>
                            <td>
                                the formation of stable structure of relation inside a group, which provide a basis for order and paterns relationships for new members.
                            </td>
                            <td>
                                25 April 2019
                            </td>
                            <td>
                                Detroit
                            </td>
                            <td>
                                Confirm
                            </td>
                        </tr> -->
                        
                    </tbody>
                </table>
            </div>
        </section>
    </main>