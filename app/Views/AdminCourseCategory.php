<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<style>
    .category-thu {
        width: 80px;
        height: 80px;
        border-radius: 10px;
    }
</style>
<div class="row">

    <div class="col-md-6">
        <div class="card mb-4">
            <form action="<?php echo isset($edited) ?  base_url('edit/course/category/now') : base_url('create/course/category') ?>" method="POST" enctype="multipart/form-data">
                <h5 class="card-header">Category</h5>
                <div class="card-body">
                    <div>
                        <input type="hidden" name="id" id="" value="<?php echo isset($edited) ? $edited['cat_id'] : '' ?>">
                        <label for="defaultFormControlInput" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="category" id="defaultFormControlInput" placeholder="Coronavirus" aria-describedby="defaultFormControlHelp" value="<?php echo isset($edited) ? $edited['category'] : '' ?>" />
                        <div class="mb-3 mt-3   ">
                            <label for="formFile" class="form-label">Course thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail" id="formFile" />
                        </div>
                        <?php
                        if (!empty(session()->getFlashdata('fail'))) { ?>
                            <div class="alert alert-danger mt-3"><?php echo session()->getFlashdata('fail') ?></div>
                        <?php
                        }
                        if (!empty(session()->getFlashdata('success'))) { ?>
                            <div class="alert alert-success mt-3"><?php echo session()->getFlashdata('success') ?></div>
                        <?php
                        }
                        ?>
                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Category Table</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php
                        foreach ($category as $i => $catData) :
                            $id = $catData['cat_id'];
                        ?>
                            <tr>
                                <td><?php echo ++$i ?></td>
                                <td>
                                    <img src="<?php echo base_url('/uploads') . '/' . $catData['thumbnail'] ?>" alt="Avatar" class="category-thu" />
                                </td>
                                <td><?php echo $catData['category'] ?></td>


                                <td>
                                    <?php
                                    if ($catData['status']) { ?>
                                        <a href="<?php echo base_url("status/course/category/$id") ?>"><span class='badge bg-label-primary me-1'>Active</span></a>
                                    <?php } else { ?>
                                        <a href='<?php echo base_url("status/course/category/$id") ?>'><span class='badge bg-label-danger me-1'>Disabled</span></a>
                                    <?php
                                    } ?>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo base_url("edit/course/category/$id") ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="<?php echo base_url("delete/course/category/$id") ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                        <?php
                        endforeach;
                        ?>


                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection('') ?>