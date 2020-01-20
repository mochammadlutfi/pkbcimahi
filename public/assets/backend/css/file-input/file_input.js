/* ===========================================================
 * Bootstrap: inputfile.js v3.0.0-p7
 * http://jasny.github.com/bootstrap/javascript.html#inputfile
 * ===========================================================
 * Copyright 2012 Jasny BV, Netherlands.
 *
 * Licensed under the Apache License, Version 2.0 (the "License")
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */

+function ($) { "use strict";

  var isIE = window.navigator.appName == 'Microsoft Internet Explorer'

  // FILEUPLOAD PUBLIC CLASS DEFINITION
  // =================================

  var Fileupload = function (element, options) {
    this.$element = $(element)

    this.$input = this.$element.find(':file')
    if (this.$input.length === 0) return

    this.name = this.$input.attr('name') || options.name

    this.$hidden = this.$element.find('input[type=hidden][name="'+this.name+'"]')
    if (this.$hidden.length === 0) {
      this.$hidden = $('<input type="hidden" />')
      this.$element.prepend(this.$hidden)
    }

    this.$preview = this.$element.find('.inputfile-preview')
    var height = this.$preview.css('height')
    if (this.$preview.css('display') != 'inline' && height != '0px' && height != 'none') this.$preview.css('line-height', height)

    this.original = {
      exists: this.$element.hasClass('inputfile-exists'),
      preview: this.$preview.html(),
      hiddenVal: this.$hidden.val()
    }

    this.listen()
  }

  Fileupload.prototype.listen = function() {
    this.$input.on('change.bs.inputfile', $.proxy(this.change, this))
    $(this.$input[0].form).on('reset.bs.inputfile', $.proxy(this.reset, this))

    this.$element.find('[data-trigger="inputfile"]').on('click.bs.inputfile', $.proxy(this.trigger, this))
    this.$element.find('[data-dismiss="inputfile"]').on('click.bs.inputfile', $.proxy(this.clear, this))
  },

  Fileupload.prototype.change = function(e) {
    if (e.target.files === undefined) e.target.files = e.target && e.target.value ? [ {name: e.target.value.replace(/^.+\\/, '')} ] : []
    if (e.target.files.length === 0) return

    this.$hidden.val('')
    this.$hidden.attr('name', '')
    this.$input.attr('name', this.name)

    var file = e.target.files[0]

    if (this.$preview.length > 0 && (typeof file.type !== "undefined" ? file.type.match('image.*') : file.name.match(/\.(gif|png|jpe?g)$/i)) && typeof FileReader !== "undefined") {
      var reader = new FileReader()
      var preview = this.$preview
      var element = this.$element

      reader.onload = function(re) {
        var $img = $('<img>').attr('src', re.target.result).addClass('img-avatar img-avatar215 img-avatar-thumb');
        e.target.files[0].result = re.target.result

        element.find('.inputfile-filename').text(file.name)

        // if parent has max-height, using `(max-)height: 100%` on child doesn't take padding and border into account
        if (preview.css('max-height') != 'none') $img.css('max-height', parseInt(preview.css('max-height'), 10) - parseInt(preview.css('padding-top'), 10) - parseInt(preview.css('padding-bottom'), 10)  - parseInt(preview.css('border-top'), 10) - parseInt(preview.css('border-bottom'), 10))

        preview.html($img)
        element.addClass('inputfile-exists').removeClass('inputfile-new')

        element.trigger('change.bs.inputfile', e.target.files)
      }

      reader.readAsDataURL(file)
    } else {
      this.$element.find('.inputfile-filename').text(file.name)
      this.$preview.text(file.name)

      this.$element.addClass('inputfile-exists').removeClass('inputfile-new')

      this.$element.trigger('change.bs.inputfile')
    }
  },

  Fileupload.prototype.clear = function(e) {
    if (e) e.preventDefault()

    this.$hidden.val('')
    this.$hidden.attr('name', this.name)
    this.$input.attr('name', '')

    //ie8+ doesn't support changing the value of input with type=file so clone instead
    if (isIE) {
      var inputClone = this.$input.clone(true);
      this.$input.after(inputClone);
      this.$input.remove();
      this.$input = inputClone;
    } else {
      this.$input.val('')
    }

    this.$preview.html('')
    this.$element.find('.inputfile-filename').text('')
    this.$element.addClass('inputfile-new').removeClass('inputfile-exists')

    if (e !== false) {
      this.$input.trigger('change')
      this.$element.trigger('clear.bs.inputfile')
    }
  },

  Fileupload.prototype.reset = function() {
    this.clear(false)

    this.$hidden.val(this.original.hiddenVal)
    this.$preview.html(this.original.preview)
    this.$element.find('.inputfile-filename').text('')

    if (this.original.exists) this.$element.addClass('inputfile-exists').removeClass('inputfile-new')
     else this.$element.addClass('inputfile-new').removeClass('inputfile-exists')

    this.$element.trigger('reset.bs.inputfile')
  },

  Fileupload.prototype.trigger = function(e) {
    this.$input.trigger('click')
    e.preventDefault()
  }


  // FILEUPLOAD PLUGIN DEFINITION
  // ===========================

  $.fn.inputfile = function (options) {
    return this.each(function () {
      var $this = $(this)
      , data = $this.data('inputfile')
      if (!data) $this.data('inputfile', (data = new Fileupload(this, options)))
      if (typeof options == 'string') data[options]()
    })
  }

  $.fn.inputfile.Constructor = Fileupload


  // FILEUPLOAD DATA-API
  // ==================

  $(document).on('click.inputfile.data-api', '[data-provides="inputfile"]', function (e) {
    var $this = $(this)
    if ($this.data('inputfile')) return
    $this.inputfile($this.data())

    var $target = $(e.target).closest('[data-dismiss="inputfile"],[data-trigger="inputfile"]');
    if ($target.length > 0) {
      e.preventDefault()
      $target.trigger('click.bs.inputfile')
    }
  })

}(window.jQuery);
