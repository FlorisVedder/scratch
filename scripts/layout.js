(function ($) {

  $(document).ready(function() {
    // give #header-info and #header-menu inside the #header container the same height
    sameSiblingHeights("#header", "#header-info, #header-menu");
    // give siblings of #main the same height
    sameSiblingHeights("#main");
  });


  /**
   * Function to measure siblings on same position and give them the same height.
   *
   * @parentSelector selector for parent
   *  The dom element for wich the children en itself needs to have
   *  the same height. For example "#main"
   *
   * @childSelector optional selector for child.
   *   If given the code will only be applied on the give children
   */
  function sameSiblingHeights(parentSelector, childSelectors){
    var parent = $(parentSelector);
    var height = 0;
    var children = parent.children(childSelectors);
    var mainChild = children.first();

    // determine if all the childs start on a same position
    if(mainChild.offset().top == mainChild.siblings().offset().top){
      // read out the heighest child
      children.each(function(){
        var thisheight = $(this).outerHeight();
        if(thisheight > height) {
          height = thisheight;
        }
      });
      // give this height to all sibblings and their parent
      children.height(height);
      parent.height(height);
    }
  }
})(jQuery);