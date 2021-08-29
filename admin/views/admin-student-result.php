<!--== User Details ==-->
<h2 class="text-center">Student Result</h2>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Student Result</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <form action="" method="post">
                            <div class="">
                                <div class="form-group ">
                                    <label for="inputState">Class</label>
                                    <select id="inputState" class="form-control" name="class" style="font-size: 15px;">
                                        <option selected disabled>---Choose Class---</option>
                                        <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                        <option value="<?php echo $classe['class_id']; ?>">
                                            <?php echo $classe['name']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group ">
                                    <label for="inputState">Subject </label>
                                    <select id="inputState" class="form-control" name="subject"
                                        style="font-size: 15px;">
                                        <option selected disabled>---Choose Subject---</option>
                                        <?php while($subject = mysqli_fetch_assoc($subjects)){ ?>
                                        <option value="<?php echo $subject['subject_id']; ?>">
                                            <?php echo $subject['name']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group ">
                                    <label for="inputState">Session</label>
                                    <select id="inputState" class="form-control" name="session"
                                        style="font-size: 15px;">
                                        <option selected disabled>---Choose Session---</option>
                                        <?php while($session = mysqli_fetch_assoc($sessions)){ ?>
                                        <option value="<?php echo $session['session_id']; ?>">
                                            <?php echo $session['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group ">
                                    <label for="inputState">Exam </label>
                                    <select id="inputState" class="form-control" name="exam" style="font-size: 15px;">
                                        <option selected disabled>---Choose Exam---</option>
                                        <?php while($exam = mysqli_fetch_assoc($exams)){ ?>
                                        <option value="<?php echo $exam['exam_id']; ?>">
                                            <?php echo $exam['exam_name']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class=" col s12">
                                    <label class="" id="marksObtain">Marks Obtain</label>
                                    <input type="number" value="" class="validate" required name="marks_obtain">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col s12">
                                    <label class="">Marks Total</label>
                                    <input type="number" value="" class="validate" required name="total_marks">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col s12">
                                    <label class="">Result</label>
                                    <input type="text" value="" id="marksres" class="validate" required name="result">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col s12">
                                    <label class="">Comments</label>
                                    <input type="text" value="" class="validate" required name="comments">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                            type="submit" class="waves-button-input" name="add_exam_marks"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>