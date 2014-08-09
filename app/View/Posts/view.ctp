<h2><?php echo h($post['Post']['title']); ?></h2>
<p><?php echo h($post['Post']['body']);?> </p>

<h2>comments</h2>
<?php foreach ($post['Comment'] as $comment): ?>
<li>
<?php echo h($comment['body']); ?> by <?php echo h($comment['commenter']); ?>


<?php 
echo $this->Form->postLink('delete',array('action'=>'delete',$comment['id']),
array('confirm'=>'sure?'));
?>
</li>
<?php  endforeach;?>

<h2>add comment</h2>

<?php 

echo $this->Form->create('Comment',array('action'=>'add'));
echo $this->Form->input('commenter');
echo $this->Form->input('body',array('rows'=>3));
echo $this->Form->input('Comment.post_id',array('type'=>'hidden','value'=>$post['Post']['id']));
echo $this->Form->end('post comment');

?>