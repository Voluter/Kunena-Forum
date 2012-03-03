<?php
/**
 * Kunena Component
 * @package Kunena.Template.Default20
 * @subpackage Topic
 *
 * @copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<ul class="list-unstyled kpost-user-details">
	<li class="kpost-user-username"><?php echo $this->profile->getLink($this->message->name) ?></li>
	<?php if (!empty($this->usertype)) : ?><li class="kpost-user-type">( <?php echo JText::_($this->escape($this->usertype)) ?> )</li><?php endif ?>
	<?php $avatar = $this->profile->getAvatarImage ('kavatar', 'post'); if ($avatar) : ?>
	<li class="kpost-user-avatar">
		<span class="kavatar"><?php echo $this->profile->getLink($avatar); ?></span>
	</li>
	<?php endif; ?>
	<?php if ($this->profile->exists()): ?>
	<li class="kpost-user-status">
		<span class="kicon-button kbuttononline-<?php echo $this->profile->isOnline('yes', 'no') ?>">
			<span class="online-<?php echo $this->profile->isOnline('yes', 'no') ?>">
				<span><?php echo $this->profile->isOnline(JText::_('COM_KUNENA_ONLINE'), JText::_('COM_KUNENA_OFFLINE')) ?></span>
			</span>
		</span>
	</li>
	<?php if (!empty($this->userranktitle)) : ?><li class="kpost-user-rank"><?php echo $this->escape($this->userranktitle) ?></li><?php endif ?>
	<?php if (!empty($this->userrankimage)) : ?><li class="kpost-user-rank-img"><?php echo $this->userrankimage ?></li><?php endif ?>
	<?php if ($this->userposts) : ?><li class="kpost-user-posts"><?php echo JText::_('COM_KUNENA_POSTS') .' '. intval($this->userposts) ?></li><?php endif ?>
	<?php if ($this->userpoints) : ?><li class="kpost-user-points"><?php echo JText::_('COM_KUNENA_AUP_POINTS') .' '. intval($this->userpoints); ?></li><?php endif ?>
	<?php if ( $this->userkarma ) : ?><li class="kpost-user-karma"><?php echo $this->userkarma ?></li><?php endif ?>
	<?php if ( $this->userthankyou ) : ?><li class="kpost-user-karma"><?php echo JText::_('COM_KUNENA_MYPROFILE_THANKYOU_RECEIVED') .' '. intval($this->userthankyou ) ?></li><?php endif ?>
	<?php if ( !empty($this->usermedals) ) : ?>
	<li class="kpost-user-medals">
		<?php foreach ( $this->usermedals as $medal ) : ?><?php echo $medal; ?><?php endforeach ?>
	</li>
	<?php endif ?>
	<li class="kpost-user-icons">
		<?php echo $this->profile->profileIcon('gender') ?>
		<?php echo $this->profile->profileIcon('birthdate') ?>
		<?php echo $this->profile->profileIcon('location') ?>
		<?php echo $this->profile->profileIcon('website') ?>
		<?php echo $this->profile->profileIcon('private') ?>
		<?php echo $this->profile->profileIcon('email') ?>
	</li>
	<?php if (!empty($this->personalText)) : ?><li class="kpost-user-perstext"><?php echo $this->personalText ?></li><?php endif ?>
	<?php endif ?>
</ul>