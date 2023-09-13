</section>
</div>

    <footer class="main-footer">
        &copy; <span id="tahun"></span> All rights reserved.
        <script>
            document.getElementById("tahun").innerHTML = new Date().getFullYear();
        </script>
    </footer>
</div>
<!-- ./wrapper -->

<!-- sweetalert-->
<?php if ($this->session->flashdata('success')) {?>   
    <script type="text/javascript">
        $(function(){
            swal("Success", "<?=$_SESSION['success']?>", "success");
        });
  </script>
<?php }?>

<?php if ($this->session->flashdata('failed')) {?>   
    <script type="text/javascript">
        $(function(){
            swal("Failed","<?=$_SESSION['failed']?>","error");
        });
    </script>
<?php }?>

<?php if ($this->session->flashdata('avaible')) {?>   
    <script type="text/javascript">
        $(function(){
            swal("Info","<?=$_SESSION['avaible']?>","warning");
        });
    </script>
<?php }?>

</body>
</html>
