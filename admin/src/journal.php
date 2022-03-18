<?php

$student = mysql_query("SELECT *, (SELECT name FROM dic_student WHERE id=t1.student_id) as student_name,
                            (SELECT status FROM doc_lesson WHERE id=t1.lesson_id) as status
                            FROM doc_lesson_list t1 
                            WHERE group_id=".$_REQUEST['group_id']."
                            AND (SELECT subject_id FROM doc_lesson WHERE id=t1.lesson_id)=".$_REQUEST['subject_id']." 
                            AND (SELECT teacher_id FROM doc_lesson WHERE id=t1.lesson_id)=".$_REQUEST['teacher_id']." 
                            AND (SELECT curdate FROM doc_lesson WHERE id=t1.lesson_id)=CURDATE() 
                        ");
?>

<table class="table table-bordered table-striped table-sm text-xsmall" id="simple_table" width="100%" cellspacing="0">

    <thead>
        <tr>
            <th rowspan="2">№</th>
            <th width="400px" rowspan="2">Студент</th>
            <th colspan="3">Посещаемость и оценивать </th>
        </tr>
        <tr>
            <th>Балл</th>
            <th>НБ</th>
            <th>Причина</th>
        </tr>
    </thead>

    <tbody>

    <?php

    $line_num = 0;
    $disabled_ball = '';
    $disabled_nb = '';
    $disabled_reason = 'disabled';
    while($row = mysql_fetch_array($student)) {
        $line_num += 1;

        $disabled_nb='disabled=""';
        $disabled_reason='disabled=""';
        $disabled_ball='disabled=""'; 
        
        echo '<tr>';
        echo    '<td width="40px" align="center">'.$line_num.'</td>';
        echo    '<td>'.$row['student_name'].'
                    <div class="clearfix loading-row" style="margin-top:-20px;display:none;">
                        <div class="spinner-border float-right" style="height:24px;width:24px;" role="status">
                        <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </td>';
        echo    '<td width="80px">
                        <input type="hidden" class="row_id" value="'.$row['id'].'" />
                        <input type="number" class="form-control px-1 row_ball" style="height:28px;text-align:center;" min=0 value="'.$ball.'" '.$disabled_ball.' /></td>';
        echo    '<td width="50px" align="center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input nb_value" id="nb_'.$row['id'].'" '.$checked_nb.' '.$disabled_nb.' name="example1">
                        <label class="custom-control-label label-danger" for="nb_'.$row['id'].'"></label>
                    </div>
                </td>';
        echo    '<td width="50px" align="center">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input reason_value" '.$checked_reason.' '.$disabled_reason.' id="reason_'.$row['id'].'">
                        <label class="custom-control-label" for="reason_'.$row['id'].'"></label>
                    </div>
                </td>';
        echo '</tr>';
    }
    
    ?>

    </tbody>
    
</table>