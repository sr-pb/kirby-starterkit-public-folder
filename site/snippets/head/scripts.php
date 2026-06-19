<script>
(function() {
  var e = document.createElement('div');
  e.style.cssText = 'width:100px;height:100px;overflow:scroll;position:absolute;visibility:hidden';
  document.documentElement.appendChild(e);
  document.documentElement.style.setProperty("--scrollbar-width", (e.offsetWidth - e.clientWidth) + "px");
  e.remove();
})();
</script>
