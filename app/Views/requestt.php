<div class="content">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-6 float-start">
                <h4 class="m-0 text-dark text-muted">Request</h4>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-end">
                    <li class="breadcrumb-item"><a href="#"> Home</a></li>
                    <li class="breadcrumb-item active">Request</li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="content" id="tableContent">
                <div class="canvas-wrapper">
                    <div class="table-responsive">
                        <table class="table no-margin table-striped">
                            <thead class="success">
                                <tr>
                                    <th> Name</th>
                                    
                                    <th> Phone</th>
                                    <th>Department</th>
                                    <th>No. of days</th>
                                    <th>from-to</th>
                                    <th>Reason</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($get as $key=>$val){ ?>
                                    <form  action="<?php base_url() ?>/editpage/<?php echo $val['wid'] ?>/<?php echo $val['id'] ?>" method="post">
                                        <tr>
                                         <td data-label="Name"><?php echo $val['name'] ?></td>
                                            <td data-label="Phone"><?php echo $val['phone'] ?></td>
                                            <td data-label="Department"> <?php echo $val['department'] ?></td>
                                            <td data-label=">No. of days"><input style="width: 60px;" type="int" name="days" value="<?php echo $val['days'] ?>"></td>
                                            <td data-label=">from-to"><input style="width: 60px;" type="int" name="from" value="<?php echo $val['from'] ?>"></td>

                                            <td data-label="Reason"><?php echo $val['reason'] ?></td>
                                            <td data-label="Action">
                                                <a href="<?php base_url() ?>/editpage/<?php echo $val['wid'] ?>/<?php echo $val['id'] ?>"><button>Update</button></a>
                                                <a onclick="return confirm('Are you sure you want to delete?')" href="<?php base_url()?>/deletpage/<?php echo $val['wid'] ?>">Delete</a>
                                            </td>
                                        </tr>
                                        </form>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>