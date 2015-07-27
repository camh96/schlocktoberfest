$(function () {
  new Taggle("tags", {
    tags: inputTags.split(','),
    hiddenInputName: 'tags[]'
  })
});