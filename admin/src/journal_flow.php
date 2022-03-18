<?php

$student = mysql_query("SELECT *, (SELECT name FROM dic_student WHERE id=t1.student_id) as student_name,
                            (SELECT status FROM doc_lesson WHERE id=t1.lesson_id) as status,
                            (SELECT name FROM dic_group WHERE id=t1.group_id) as group_name
                            FROM doc_lesson_list t1 
                            WHERE (SELECT potok_id FROM doc_lesson WHERE id=t1.lesson_id)=".$_REQUEST['potok_id']."
                            AND (SELECT subject_id FROM doc_lesson WHERE id=t1.lesson_id)=".$_REQUEST['subject_id']." 
                            AND (SELECT teacher_id FROM doc_lesson WHERE id=t1.lesson_id)=".$_REQUEST['teacher_id']." 
                            AND (SELECT curdate FROM doc_lesson WHERE id=t1.lesson_id)=CURDATE() 
                            ORDER BY group_id, student_id
                        ");
?>

<table class="table table-bordered table-striped table-sm text-xsmall" id="simple_table" width="100%" cellspacing="0">

    <thead>
        <tr>
            <th rowspan="2">№</th>
            <th width="400px" rowspan="2">Студент</th>
            <th rowspan="2">Группа</th>
            <th colspan="2">Посещаемость</th>
        </tr>
        <tr>
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
    $group_name = '';
    while($row = mysql_fetch_array($student)) {
        $line_num += 1;

        // if($group_name == '') { $group_name = $row['group_name']; }

        if($group_name != $row['group_name']) {
            echo '<tr class="bg-info text-white">';
            echo    '<td colspan="5">Группа: '.$row['group_name'].'</td>';
            echo '</tr>';
            $group_name = $row['group_name'];
        }

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
        echo    '<td width="80px" align="center">
                    <input type="hidden" class="row_id" value="'.$row['id'].'" />
                    '.$row['group_name'].'
                </td>';
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