
    <section class="mt-5">
          <div class="container ">
            <h1>Add New Tasks</h1>
            <div>
              <form method="post" action="<?php echo base_url(); ?>process_newtask">
                <p class="fw-bold">Task Details</p>
                <p>PLease enter the details of the task you want to add.</p>
                
                <div class="row mb-3 mt-3 ">
                  <label for="inputtitle" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" >
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputdescription" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text " class="form-control" name="description" >
                  </div>
                </div>
                <div class="row mb-3 ">
                  <label for="inputDate" class="col-sm-2 col-form-label">Due Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="duedate" required>
                  </div>
                </div>

                <button type="submit" class="btn-primary btn">Add Task</button>
              </form>
            </div>
          </div>

    </section>