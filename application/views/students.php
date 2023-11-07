<div class="right_box">
                        <div class="table_box1">
                            <h3>Enrolled In</h3>
                            <form action="/student" method="post">
                            <input name="code" type="text" placeholder="Course Name" >
                            <input style="width:200px;" type="submit" value="Search" >
                            </form>
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Phone</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($admin as $key=>$ad){ ?>
     
     <td><?php echo $ad['id'] ?></td>
     <td><?php echo $ad['name'] ?></td>
     <td><?php echo $ad['phone'] ?></td>
     <td><?php echo $ad['duration'] ?></td>
     <td><?php echo $ad['status'] ?></td>
    
   </tr>
   <?php } ?>
                                 
                                </tbody>
                            </table>
                        </div>
</div>
                