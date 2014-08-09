<h2>‹LŽ–</h2>
<u1>
<?php foreach ($posts as $post) : ?>
<li id="post_<?php echo h($post['Post']['id']); ?>">
<?php 
//debug($post);
//echo h($post['Post']['title']);
echo $this->Html->link($post['Post']['title'],'/posts/view/'.$post['Post']['id']);
?>


<?php echo $this->Html->link('edit',array('action'=>'edit',$post['Post']['id'])); ?>


<?php
echo $this->Form->postLink('delete',array('action'=>'delete',$post['Post']['id']),
array('confirm'=>'sure?'));
?>
</li>
<?php endforeach; ?>
</u1>

<h2>Add Post</h2>
<?php 
echo $this->Html->link('Add Post',array('controller'=>'posts','action'=>'add'));
?>

<script>
// $(function(){
// 	$('a.delete').click(function(e){
// 		if(confirm('sure_')){
// 			$.post('/cakephp/posts/delete/'+$(this).data('post-id'),{},function(res){
// 				$('#post_'+res.id).fadeOut();
// 			},"json");
// 		}
// 		return false;	
// 	});
// });
<!-- </script> -->
