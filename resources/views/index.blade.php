
<!-- code for gif image end-->
<html>
  @include('partials.head')
  <!-- code for gif image start-->
<script type="text/javascript">
$(function(){
$(".preload").fadeOut(700,function(){
$(".content").fadeIn(350);
});
});
</script>
  <body>
    
    @include('partials.navs')
    @include('partials.manage_students')
    @include('partials.students_info')
    <!-- code for book record -->
    @include('partials.manage_books')
    @include('partials.books_info')
    @include('partials.circulation')
    @include('partials.issuance_info')
    @include('partials.manage_faculty')
    @include('partials.manage_admin')
    @include('partials.admin_info')
    
  </body>
</html>
<div class="preload">
  <img src="img/ajax_loader.gif"/>
</div>