
    <header class="text-dark text-center py-5 bg-gradient">
        <div class="container">
            <h1>Welcome to Task Management System</h1>
            <p clas="lead">Manage your tasks effectively and efficiently</p>
            <a href="<?php echo base_url(); ?>newtask" class="btn btn-primary btn-lg">Add New Task</a>
        </div>
    </header>

    <section class="mt-5">
          <div class="container">
            <div class="mt-3">
                <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                         $id = 1 ;
                    foreach ($tasks as $task):
                            ?>
                            <tr>

                                <td ><?=$id?></td>
                                <td><?= $task['title']?></td>
                                <td><?=$task['description']?></td>

                                <td><?=$task['due_date']?></td>
                                <td><?php echo $status[$task['status']]; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?> update/<?= $task['id'] ?>" class="btn-warning btn ">Update</a> 
                                    <a href="<?php echo base_url(); ?> delete/<?= $task['id'] ?>" class="btn-danger btn ">delete</a>  
                                </td>
                            </tr>
                        <?php $id++; 
                    endforeach; ?>
                    </tbody>
                </table> 
            </div>
          </div>
    </section>

    <?php if (session()->getFlashdata('success')): ?>
                   
                   <script>
                       Swal.fire({
                 title: "Success!!",
                 text: "<?php echo session()->getFlashdata('success'); ?>",
                 icon: "success"
               });
               </script>
                        <?php endif; ?>