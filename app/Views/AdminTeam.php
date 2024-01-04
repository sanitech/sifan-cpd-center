<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="row">

    <div class="col-md-6">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Team Information</h5>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                </div>
                <div class="card-body">
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
                    <form action="<?php echo isset($edited) ? base_url('edit/team/now') : base_url('create/team') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="" value="<?php echo isset($edited) ? $edited['id'] : '' ?>">

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Team Name</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="name" placeholder="new Event" value="<?php echo isset($edited) ? $edited['name'] : '' ?>" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company"> Sector of Work</label>
                            <input type="text" class="form-control" id="basic-default-company" name="work" placeholder="" value="<?php echo isset($edited) ? $edited['work'] : '' ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Picture</label>
                            <input class="form-control" type="file" name="pic" id="formFile" />
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
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
                            <th>pic</th>
                            <th>Name</th>
                            <th>Work</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php
                        foreach ($team as $i => $team) :
                            $id = $team['id'];
                        ?>
                            <tr>
                                <td><?php echo ++$i ?></td>
                                <td>
                                    <img src="<?php echo base_url('/uploads') . '/' . $team['pic'] ?>" alt="Avatar" class="category-thu" width="100" height="80" />
                                </td>
                                <td><?php echo $team['name'] ?></td>
                                <td><?php echo $team['work'] ?></td>


                                <td>
                                    <?php
                                    if ($team['status']) { ?>
                                        <a href="<?php echo base_url("status/team/$id") ?>"><span class='badge bg-label-primary me-1'>Active</span></a>
                                    <?php } else { ?>
                                        <a href='<?php echo base_url("status/team/$id") ?>'><span class='badge bg-label-danger me-1'>Disabled</span></a>
                                    <?php
                                    } ?>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo base_url("edit/team/$id") ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="<?php echo base_url("delete/team/$id") ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection('') ?>