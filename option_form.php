<div>
<h1>GNOSEF Settings</h1>
</div>
<div>
<form method="POST">

<h3>Box 1</h3>
    <label for="b1img">Box 1 Image</label>
     <table>
        <caption></caption>
        <tr>
            <th>Large</th>
            <th>Small</th>
        </tr>
        <tr>
            <th>
            <img class="gno_admin_img_long" src= <?php echo $box1->img; ?> />
            </th>
            <th>
            <img class="gno_admin_img_short" src= <?php echo $box1->img; ?> />
            </th>
        </tr>
     </table>
    <input type="text" name="b1img" id="b1img" size="130" value="<?php echo $box1->img; ?>">
    <br>
    <button type="button-primary" name="b1img">Change Image</button>
    </p><?php echo $box1->img; ?>
        <p>
    <label for="b1link">Box 1 Link</label>
    <select name="b1link"> 
     <option value="">
        <?php echo esc_attr( __( 'Select page' ) ); ?></option> <?php 
        $pages = get_pages(); 
        foreach ( $pages as $page ) {
        if ($box1->link == get_page_link( $page->ID )){
            $sel = ' selected';
        } else {
            $sel = '';
        }
        $option = '<option value="' . get_page_link( $page->ID ) . '"'.$sel.'>';
        $option .= $page->post_title;
        $option .= '</option>';
        echo $option;
        }
     ?>
    </select></p><p>
    <label for="b1tit">Box 1 Title</label>
    <input type="text" name="b1tit" id="b1tit" value="<?php echo $box1->title; ?>"></p>
    <p>
    <label for="b1txt">Box 1 Text</label><br>
    <textarea name="b1txt" id="b1txt" value="<?php echo $box1->text; ?>"><?php echo $box1->text; ?></textarea><br></p>

<h3>Box 2</h3>
    <label for="b2link">Box 2 Link</label>
         <table>
        <caption></caption>
        <tr>
            <th>Large</th>
            <th>Small</th>
        </tr>
        <tr>
            <th>
            <img class="gno_admin_img_long" src= <?php echo $box2->img; ?> />
            </th>
            <th>
            <img class="gno_admin_img_short" src= <?php echo $box2->img; ?> />
            </th>
        </tr>
     </table>
    <input type="text" name="b2img" id="b2img" size="130" value="<?php echo $box2->img; ?>"> 
    <br>
    <button type="button-primary" name="b2img">Change Image</button>
    </p><?php echo $box2->img; ?>
     <p>
    <select name="b2link"> 
     <option value="">
        <?php echo esc_attr( __( 'Select page' ) ); ?></option> <?php 
        $pages = get_pages(); 
        foreach ( $pages as $page ) {
        if ($box2->link == get_page_link( $page->ID )){
            $sel = ' selected';
        } else {
            $sel = '';
        }
        $option = '<option value="' . get_page_link( $page->ID ) . '"'.$sel.'>';
        $option .= $page->post_title;
        $option .= '</option>';
        echo $option;
      }
     ?>
    </select></p><p>
    <label for="b2tit">Box 2 Title</label>
        <input type="text" name="b2tit" id="b1tit" value="<?php echo $box2->title; ?>"></p><p>
    <label for="b2txt">Box 2 Text</label><br>
    <textarea name="b2txt" id="b2txt" value="<?php echo $box2->text; ?>"><?php echo $box2->text; ?></textarea></p>

<h3>Box 3</h3>
    <label for="b3link">Box 3 Link</label>
         <table>
        <caption></caption>
        <tr>
            <th>Large</th>
            <th>Small</th>
        </tr>
        <tr>
            <th>
            <img class="gno_admin_img_long" src= <?php echo $box3->img; ?> />
            </th>
            <th>
            <img class="gno_admin_img_short" src= <?php echo $box3->img; ?> />
            </th>
        </tr>
     </table>
      <input type="text" name="b3img" id="b3img" size="130" value="<?php echo $box3->img; ?>">
      <br>
      <button type="button-primary" name="b3img">Change Image</button>
   </p><?php echo $box3->img; ?>
    <p>
    <select name="b3link"> 
     <option value="">
        <?php echo esc_attr( __( 'Select page' ) ); ?></option> <?php 
        $pages = get_pages(); 
        foreach ( $pages as $page ) {
        if ($box3->link == get_page_link( $page->ID )){
            $sel = ' selected';
        } else {
            $sel = '';
        }
        $option = '<option value="' . get_page_link( $page->ID ) . '"'.$sel.'>';
        $option .= $page->post_title;
        $option .= '</option>';
        echo $option;
      }
     ?>
    </select></p><p>
    <label for="b3tit">Box 3 Title</label>
    <input type="text" name="b3tit" id="b1tit" value="<?php echo $box3->title; ?>"></p><p>
    <label for="b3txt">Box 3 Text</label><br>
    <textarea name="b3txt" id="b3txt" value="<?php echo $box3->text; ?>"><?php echo $box3->text; ?></textarea><br>
    </p>
    <input type="submit" value="Save" class="button button-primary button-large">

</div>
