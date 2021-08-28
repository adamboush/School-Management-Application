<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

$sessionSQL = "SELECT * FROM `session`";
$sessions = $crud->select($sessionSQL);

$examSQL = "SELECT * FROM `exam_all`";
$exams = $crud->select($examSQL);

$subjectSQL = "SELECT * FROM `subject`";
$subjects = $crud->select($subjectSQL);

if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];
        $showExamMarks = "SELECT * FROM `exam_marks` WHERE mark_id = $retID";
        $Marks = $crud->select($showExamMarks);
        $mark = mysqli_fetch_assoc($Marks);
    }
}
if(isset($_POST['update_exam_marks'])){
    extract($_POST);
    $examMarksupSQL = "UPDATE `exam_marks` SET `student_id`='$std_id',`subject_id`='$subject',`class_id`='$class',`session_id`='$session',`exam_id`='$exam',`mark_obtained`='$marks_obtain',`mark_total`='$total_marks',`comment`='$comments' WHERE mark_id = $up_id";
    $updateMarkd  = $crud->insert($examMarksupSQL);

    if(isset($updateMarkd)){
        echo "<h2 class='text-success'>Exam Mark Update Success</h2>";

    }else{
        echo "<h2 class='text-danger'>Exam Mark Update Error, Please Try Again!!</h2>";
    }
}
?>
<!--== Seminar Details ==-->
<h1>Update Exam Marks</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Exam Marks</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student ID</label>
                                <input type="text" value="<?php echo $mark['student_id']; ?>" class="validate" required name="std_id">
                            </div>
                        </div>
                        <input type="hidden" name="up_id" value="<?php echo $mark['mark_id']; ?>">
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Subject </label>
                                <select id="inputState" class="form-control" name="subject" style="font-size: 15px;">
                                    <option selected disabled>---Choose Subject---</option>
                                    <?php while($subject = mysqli_fetch_assoc($subjects)){ ?>
                                    <option value="<?php echo $subject['subject_id']; ?>" 
                                    <?php if($subject['subject_id']==$mark['subject_id']){ echo "selected";} ?>>
                                        <?php echo $subject['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Class</label>
                                <select id="inputState" class="form-control" name="class" style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['class_id']; ?>"
                                    <?php if($classe['class_id']==$mark['class_id']){ echo "selected";} ?>><?php echo $classe['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Session</label>
                                <select id="inputState" class="form-control" name="session" style="font-size: 15px;">
                                    <option selected disabled>---Choose Session---</option>
                                    <?php while($session = mysqli_fetch_assoc($sessions)){ ?>
                                    <option value="<?php echo $session['session_id']; ?>"
                                    <?php if($session['session_id']==$mark['session_id']){ echo "selected";} ?>>
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
                                    <option value="<?php echo $exam['exam_id']; ?>"
                                    <?php if($exam['exam_id']==$mark['exam_id']){ echo "selected";} ?>><?php echo $exam['exam_name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Marks Obtain</label>
                                <input type="number" value="<?php echo $mark['mark_obtained']; ?>" class="validate" required name="marks_obtain">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Marks Total</label>
                                <input type="number" value="<?php echo $mark['mark_total']; ?>" class="validate" required name="total_marks">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Comments</label>
                                <input type="text" value="<?php echo $mark['comment']; ?>" class="validate" required name="comments">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="update_exam_marks"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>