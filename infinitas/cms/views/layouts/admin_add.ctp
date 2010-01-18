<?php
    /**
     * Comment Template.
     *
     * @todo -c Implement .this needs to be sorted out.
     *
     * Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     *
     * Licensed under The MIT License
     * Redistributions of files must retain the above copyright notice.
     *
     * @filesource
     * @copyright     Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     * @link          http://www.dogmatic.co.za
     * @package       sort
     * @subpackage    sort.comments
     * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
     * @since         0.5a
     */
?>
<div class="contents form">
	<?php
		echo $this->Cms->adminOtherHead( $this );
		echo $this->Form->create( 'Layout' );
    		echo $this->Form->input( 'id' );
    		echo $this->Form->input( 'name', array('class' => 'title') );
    		echo $this->Form->input( 'css', array('class' => 'title') );
    		echo $this->Cms->wysiwyg( 'Layout.html' );
    		echo $this->Form->input( 'php', array('class' => 'title') );
   		echo $this->Form->end( __( 'Submit', true ) );
   	?>
</div>
<div class="clr">
	<p>
		<?php __('Use [[Model.field_name]] for normal text.',true); ?>
	</p>
	<p>
		<?php __('Use {{Model.field_name}} for links.',true); ?>
	</p>
</div>