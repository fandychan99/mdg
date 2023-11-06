 <!-- Section Menu From DB -->
 <?php
    $lvl1 = array_filter($_list_menu, function ($obj) {
        return $obj['level'] === '1';
    });

    foreach ($lvl1 as $r1) {
        $bool = ($r1['menu_id'] == null ? false : true);
        echo "<tr>
                <td>" . $r1['name'] . "</td>
                <td>" . form_checkbox('chk_akses[]', $r1['id'], $bool) . "</td>
                <td hidden>" . form_checkbox('chk_add[]', $r1['id'], $r1['add_mode']) . "</td>
                <td hidden>" . form_checkbox('chk_edit[]', $r1['id'], $r1['edit_mode']) . "</td>
                <td hidden>" . form_checkbox('chk_delete[]', $r1['id'], $r1['delete_mode']) . "</td>
                <td hidden>" . form_checkbox('chk_pdf[]', $r1['id'], $r1['pdf_mode']) . "</td>
                <td hidden>" . form_checkbox('chk_excel[]', $r1['id'], $r1['excel_mode']) . "</td>
            </tr>";
        if ($r1['have_child']) {
            $id =  $r1['id'];
            $lvl2 = array_filter($_list_menu, function ($obj) use ($id) {
                return $obj['parent'] === $id;
            });
            foreach ($lvl2 as $r2) {
                $bool2 = ($r2['menu_id'] == null ? false : true);
                echo "<tr>
                        <td> &nbsp; &nbsp;<i class='bi bi-chevron-right'></i> &nbsp;" . $r2['name'] . "</td>
                        <td>" . form_checkbox('chk_akses[]', $r2['id'], $bool2) . "</td>
                        <td hidden>" . form_checkbox('chk_add[]', $r2['id'], $r2['add_mode']) . "</td>
                        <td hidden>" . form_checkbox('chk_edit[]', $r2['id'], $r2['edit_mode']) . "</td>
                        <td hidden>" . form_checkbox('chk_delete[]', $r2['id'], $r2['delete_mode']) . "</td>
                        <td hidden>" . form_checkbox('chk_pdf[]', $r2['id'], $r2['pdf_mode']) . "</td>
                        <td hidden>" . form_checkbox('chk_excel[]', $r2['id'], $r2['excel_mode']) . "</td>
                    </tr>";
                if ($r2['have_child']) {
                    $id =  $r2['id'];
                    $lvl3 = array_filter($_list_menu, function ($obj) use ($id) {
                        return $obj['parent'] === $id;
                    });
                    foreach ($lvl3 as $r3) {
                        $bool3 = ($r3['menu_id'] == null ? false : true);
                        echo "<tr>
                            <td> &nbsp; &nbsp; &nbsp; &nbsp;<i class='bi bi-chevron-double-right'></i> &nbsp;" . $r3['name'] . "</td>
                            <td>" . form_checkbox('chk_akses[]', $r3['id'], $bool) . "</td>
                            <td hidden>" . form_checkbox('chk_add[]', $r3['id'], $r3['add_mode']) . "</td>
                            <td hidden>" . form_checkbox('chk_edit[]', $r3['id'], $r3['edit_mode']) . "</td>
                            <td hidden>" . form_checkbox('chk_delete[]', $r3['id'], $r3['delete_mode']) . "</td>
                            <td hidden>" . form_checkbox('chk_pdf[]', $r3['id'], $r3['pdf_mode']) . "</td>
                            <td hidden>" . form_checkbox('chk_excel[]', $r3['id'], $r3['excel_mode']) . "</td>
                        </tr>";
                    }
                }
            }
        }
    }
    ?>
 <!-- End Section -->