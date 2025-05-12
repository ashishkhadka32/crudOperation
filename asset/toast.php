

<div id="success-alert" class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
  <span class="font-medium"><?php echo $_SESSION['msg']; ?></span> 
</div>

<script>
setTimeout(function() {
    var alert = document.getElementById('success-alert');
    if (alert) {
        alert.style.display = 'none';
    }
}, 3000);
</script>

<?php unset($_SESSION['msg']); ?>