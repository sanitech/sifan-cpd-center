<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="row">

    <div class="col-md-6">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Events</h5>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                </div>
                <div class="card-body">
                    <form action="<?php echo isset($edited) ? base_url('edit/event/now') : base_url('create/event') ?>" method="post" enctype="multipart/form-data">
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
                        <div class="mb-3">
                            <input type="hidden" name="id" id="" value="<?php echo isset($edited) ? $edited['id'] : '' ?>">
                            <label class="form-label" for="basic-default-fullname">Event Name</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="event" placeholder="new Event" value="<?php echo isset($edited) ? $edited['event'] : '' ?>" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Event Place</label>
                            <input type="text" class="form-control" id="basic-default-company" name="place" placeholder="Mojo" value="<?php echo isset($edited) ? $edited['place'] : '' ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Event thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Event Date</label>
                            <div class="col-md-12">
                                <input class="form-control" type="date" value="<?php echo date('Y-m-d') ?>" name="date" id="html5-date-input" value="<?php echo isset($edited) ? $edited['date'] : '' ?>" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="html5-time-input" class="col-md-2 col-form-label">Start Time</label>
                            <div class="col-md-12">
                                <input class="form-control" type="time" value="12:30:00" id="html5-time-input" name="start" value="<?php echo isset($edited) ? $edited['start'] : '' ?>" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="html5-time-input" class="col-md-2 col-form-label">End Time</label>
                            <div class="col-md-12">
                                <input class="form-control" type="time" value="12:30:00" id="html5-time-input" name="end" value="<?php echo isset($edited) ? $edited['end'] : '' ?>" />
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">create event</button>
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
                            <th>Event</th>
                            <th>Date</th>
                            <th>place</th>
                            <th>start</th>
                            <th>end</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php
                        foreach ($event as  $i => $events) :
                            $id = $events['id'];
                        ?>
                            <tr>
                                <td><?php echo ++$i ?></td>
                                <td><?php echo $events['event'] ?></td>
                                <td><?php echo $events['date'] ?></td>
                                <td><?php echo $events['place'] ?></td>
                                <td><?php echo $events['start'] ?></td>
                                <td><?php echo $events['end'] ?></td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo base_url("edit/event/$id") ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="<?php echo base_url("delete/event/$id") ?>"><i class="bx bx-trash me-1"></i> Delete</a>
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