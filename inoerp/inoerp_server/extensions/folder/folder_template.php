<form  method="post" id="extn_folder"  name="extn_folder">
 <div id ="form_header">
  <span class="heading"><?php echo gettext('Folder Header') ?></span>
  <div id="tabsHeader">
   <ul class="tabMain">
    <li><a href="#tabsHeader-1"><?php echo gettext('Basic Info') ?></a></li>
    <li><a href="#tabsHeader-2"><?php echo gettext('Images') ?></a></li>
    <li><a href="#tabsHeader-3"><?php echo gettext('Primary Image') ?></a></li>
    <li><a href="#tabsHeader-4"><?php echo gettext('Note') ?></a></li>
   </ul>
   <div class="tabContainer">

    <div id="tabsHeader-1" class="tabContent">
     <ul class="column header_field">
      <li><?php $f->l_text_field_dr_withSearch('extn_folder_id'); ?>
       <a name="show" href="form.php?class_name=extn_folder&<?php echo "mode=$mode"; ?>" class="show document_id extn_folder_id">
        <i class="fa fa-refresh"></i></a> 
      </li>
      <li><?php $f->l_checkBox_field_d('primary_cb'); ?></li>
      <li><label><?php echo gettext('Parent Name') ?></label><?php
       $cat = new extn_folder();
       echo $cat->all_child_folder_select_option('parent_id', '', $$class->parent_id, 'parent_id', false)
       ?> 
      </li>
      <li><?php $f->l_text_field_dm('folder'); ?></li>
      <li><?php $f->l_select_field_from_array('content_relation', extn_folder::$content_relation_a, $$class->content_relation); ?></li>
      <li><?php $f->l_select_field_from_object('folder_type', extn_folder::folder_types(), 'option_line_code', 'option_line_value', $$class->folder_type, 'folder_type'); ?></li>
      <li><?php $f->l_text_field_d('description'); ?></li>
      <li><?php $f->l_text_field_d('priority'); ?></li>
      <li><?php $f->l_select_field_from_object('org_id',  org::find_all(), 'org_id','org', $$class->org_id ,'org_id'); ?></li>
      <li><?php $f->l_select_field_from_object('filter_catalog_id', sys_catalog_header::find_all(), 'sys_catalog_header_id','catalog', $$class->filter_catalog_id ,'filter_catalog_id'); ?></li>
     </ul>
    </div>
    <div id="tabsHeader-2" class="tabContent">
     <div> <?php echo extn_image::ino_images($class, $$class->folder_id) ?> </div>
    </div>
    <div id="tabsHeader-3" class="tabContent">
     <div class="image"> <?php echo $f->image_field('image_file_id', $$class->image_file_id, '', '', 'img-medium'); ?> </div>
    </div>
    <div id="tabsHeader-4" class="tabContent">
     <div id="comments">
      <div id="comment_list">
       <?php echo!(empty($comments)) ? $comments : ""; ?>
      </div>
      <div id ="display_comment_form">
       <?php
       $reference_table = 'extn_folder';
       $reference_id = $$class->extn_folder_id;
       ?>
      </div>
      <div id="new_comment">
      </div>
     </div>
     <div> 
     </div>
    </div>
   </div>
  </div>

 </div>
 <div id ="form_line" class="form_line"><span class="heading"><?php echo gettext('Folder Details') ?> </span>
  <div id="tabsLine">
   <ul class="tabMain">
    <li><a href="#tabsLine-1"><?php echo gettext('Long Description') ?></a></li>
   </ul>
   <div class="tabContainer"> 
    <div id="tabsLine-1" class="tabContent">
     <ul class="column one_column">
      <li><?php echo form::text_area('long_description', $$class->long_description, '6', '120', '', 'No Character Limits'); ?>      </li>
     </ul>
    </div>
   </div>


  </div>
 </div> 
</form>	

<div id="js_data">
 <ul id="js_saving_data">
  <li class="headerClassName" data-headerClassName="extn_folder" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
  <li class="primary_column_id" data-primary_column_id="extn_folder_id" ></li>
  <li class="form_header_id" data-form_header_id="extn_folder" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedaderId" data-docHedaderId="extn_folder_id" ></li>
  <li class="btn1DivId" data-btn1DivId="extn_folder_id" ></li>
 </ul>
</div>