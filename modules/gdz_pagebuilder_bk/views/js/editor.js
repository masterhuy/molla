jQuery(function ($) {
  $.fn.getInputValue = function(){
    if (this.attr('type') == 'images') {
      return this.find('.items-container').find('.form-group').map(function(i, e) {
        return {
          alt: $(e).find('input[name=alt]').val(),
          link: $(e).find('input[name=link]').val(),
          image: $(e).find('input[name=image]').val(),
        };
      }).get();
    } else if (this.attr('type') == 'accordion') {
      return this.find('.items-container').find('.form-group').map(function(i, e) {
        return {
          title: $(e).find('input[name=title]').val(),
          content: $(e).find('[name=content]').val(),
        };
      }).get();
    } else if (this.attr('type') == 'social') {
      return this.find('.items-container').find('.form-group').map(function(i, e) {
        return {
          link: $(e).find('input[name=link]').val(),
          icon_class: $(e).find('[name=icon_class]').val(),
        };
      }).get();
    } else if (this.attr('type') == 'testimonial') {
      return this.find('.items-container').find('.form-group').map(function(i, e) {
        return {
          image: $(e).find('[name=image]').val(),
          author: $(e).find('input[name=author]').val(),
          position: $(e).find('[name=position]').val(),
          rating: $(e).find('[name=rating]').val(),
          comment: $(e).find('[name=comment]').val(),
        };
      }).get();
      return this.find('.items-container').find('.form-group').map(function(i, e) {
        return {
          author: $(e).find('input[name=author]').val(),
          position: $(e).find('[name=position]').val(),
          rating: $(e).find('[name=rating]').val(),
          comment: $(e).find('[name=comment]').val(),
        };
      }).get();

    } else if (this.attr('type') == 'checkbox') {
      if (this.attr("checked")) {
        return '1';
      }else{
        return '0';
      }
    }else{
      return this.val();
    }
  }
  $.fn.setInputValue = function(options){
    if (this.attr('type') == 'images') {
        images_input = this;
        container = images_input.find('.items-container');
        options.filed.forEach(function(input) {
          fid = genID();
          form_group = images_input.find('.form-group.hidden').clone().removeClass('hidden');
          form_group.find('input[name=alt]').val(input.alt);
          form_group.find('input[name=link]').val(input.link);
          form_group.find('.media-image-preview').attr('id', 'media-preview-'+fid).css('background-image','url(ddddd)');
          form_group.find('.media-value').attr('id', 'media-value-'+fid).val(input.image);
          form_group.find('.item-row-title').html(input.alt);
          media_upload = form_group.find('.media-upload');
          media_upload.attr('data-url', media_upload.attr('data-url')+'&fid='+fid);
          if(!input.image) media_upload.addClass('media-empty');
          container.append(form_group);
        })
    } else if (this.attr('type') == 'accordion') {
      accordion = this;
      container = accordion.find('.items-container');
      options.filed.forEach(function(input) {
        form_group = accordion.find('.form-group.hidden').clone().removeClass('hidden');
        form_group.find('input[name=title]').val(input.title);
        form_group.find('[name=content]').val(input.content);
        form_group.find('.item-row-title').html(input.title);
        container.append(form_group);
      })
    } else if (this.attr('type') == 'social') {
      social = this;
      container = social.find('.items-container');
      options.filed.forEach(function(input) {
        form_group = social.find('.form-group.hidden').clone().removeClass('hidden');
        form_group.find('input[name=link]').val(input.link);
        form_group.find('[name=icon_class]').val(input.icon_class);
        form_group.find('.item-row-title').html(input.icon_class);
        container.append(form_group);
      })
    } else if (this.attr('type') == 'testimonial') {
      fid = genID();
      testimonial = this;
      container = testimonial.find('.items-container');
      options.filed.forEach(function(input) {
        form_group = testimonial.find('.form-group.hidden').clone().removeClass('hidden');
        form_group.find('.media-image-preview').attr('id', 'media-preview-'+fid).css('background-image','url(' + input.image + ')');
        form_group.find('.media-value').attr('id', 'media-value-'+fid).val(input.image);
        media_upload = form_group.find('.media-upload');
        media_upload.attr('data-url', media_upload.attr('data-url')+'&fid='+fid);
        if(!input.image) media_upload.addClass('media-empty');
        form_group.find('input[name=image]').val(input.image);
        form_group.find('input[name=author]').val(input.author);
        form_group.find('input[name=position]').val(input.position);
        form_group.find('input[name=rating]').val(input.rating);
        form_group.find('[name=comment]').val(input.comment);
        form_group.find('.item-row-title').html(input.author);
        container.append(form_group);
      })
    } else if (this.attr('type') == 'checkbox') {
      if (options.filed == '1') {
        this.attr('checked','checked');

      } else {
        this.removeAttr('checked');
      }
    } else if(this.attr('data-type') == 'image'){
      fid = genID();
      $imgParent = this.parent();
      $imgParent.find('.media-image-preview').attr('id', 'media-preview-'+fid).css('background-image','url(' + options.filed + ')');
      $imgParent.find('.media-value').attr('id', 'media-value-'+fid).val(options.filed);
      media_upload = $imgParent.find('.media-upload');
      media_upload.attr('data-url', media_upload.attr('data-url')+'&fid='+fid);
      if(!options.filed) media_upload.addClass('media-empty');
    } else if(this.attr('data-type') == 'categories'){
      var categories = this.find('input[type=checkbox], input[type=radio]');
      var categories_result = new Array();
      if(this.attr('data-usecheckbox') == '1') {
        var val_arr = options.filed.split(",");
        categories.each(function(catindex) {
            if(jQuery.inArray($(this).val(), val_arr) != -1) {
              $(this).prop('checked', true);
            }
        });
      } else {
        categories.each(function(catindex) {
          if ($(this).val() == options.filed) {
            $(this).prop('checked', true);
          }
        });
      }
    } else if(this.attr('data-type') == 'align') {
      var lis = this.parent().find('li');
      lis.removeClass('active');
      lis.each(function() {
          if($(this).attr('data-align') == options.filed) {
              $(this).addClass('active');
          }
      });
    } else {
      this.val( options.filed );
    }
    if (this.attr('data-type') == 'screen-range') {
      var val_str = $(this).val();
      var val_arr = val_str.split("-");
      this.prev().find('input[type=number]').each(function(index){
          $(this).val(val_arr[index]);
      })
    }
    if (this.data('attrname') == 'column_type'){
      if (this.val() == 'component') {
        $('.form-group.name').hide();
      }
    }
    if (this.attr('data-type') == 'editor') {
      var eid = genID();
      this.attr('id', 'gdz-editor-' + eid);
    }
  }
  $(document).on('click',"#pagebuilder-mode-switch",function(event) {
      $('body').toggleClass('pagebuilder-editor-active');
  })
  $(document).on('change',"#select-page",function(event) {
		  document.location = PagebuilderConfig.editor_link + '&id_page=' + $(this).val() + '&id_lang=' + $('#select-language').val();
	})
  $(document).on('change',"#select-language",function(event) {
		  document.location = PagebuilderConfig.editor_link + '&id_page=' + $('#select-page').val() + '&id_lang=' + $(this).val();
	})
  $(document).on('click', '.dropbtn', function(event){
      event.stopPropagation();
      if($(this).parent().hasClass('open')) {
        $('.dropdown').removeClass('open');
      } else {
        $('.dropdown').removeClass('open');
        $(this).parent().addClass('open');
      }
  });
  $(document).on('click', '#save-template-file', function(event){
      event.preventDefault();
      event.stopPropagation();
      var config = getLayout(iframeDoc);
      var filename = $('#library-file-name').val();
      if(filename == '') {
          alert('Please enter file name');
          return;
      }
      blob = new Blob([config], { type: 'text/plain' }),
      anchor = document.createElement('a');

      anchor.download = filename + '.json';
      anchor.href = (window.webkitURL || window.URL).createObjectURL(blob);
      anchor.dataset.downloadurl = ['text/plain', anchor.download, anchor.href].join(':');
      anchor.click();
  });
  $(document).on('click', '.template-import', function(event){
      event.preventDefault();
      event.stopPropagation();
      var template_row = $(this).closest('.template-row');
      $('.pagebuilder-dialog-close').trigger('click');
      $('.pagebuilder-preview-overlay').show();
      $.ajax({
          type: 'POST',
          url: PagebuilderConfig.ajax_link + '?action=importTemplate&secure_key=' + PagebuilderConfig.secure_key,
          data: {
              id_template: template_row.attr('data-id')
          },
          success: function(data)
          {
              data = JSON.parse(data);
              iframeDoc = window.iframeDoc;
              template = $(data.html);
              wrapper = $('<div></div>').html(template);
              assignData(data.params, wrapper);
              template.insertBefore($(iframeDoc).find('.row-add'));
              $('.pagebuilder-preview-overlay').hide();
              $(template).find('.addon-sortable').sortable({
                  scroll: true,
                  scrollSensitivity: 400,
                  scrollSpeed: 13,
                  placeholder: "ui-state-highlight",
                  connectWith: ".addon-sortable",
                  update: function(event, ui) {
                      checkEmpty(iframeDoc);
                  }
              });
          }
      });
  });
  //fancybox
  $(document).on('click','.media-upload',function(event) {
      $.fancybox({
          type: 'iframe',
          href: $(this).attr('data-url'),
          autoDimensions: false,
          autoSize: false,
          arrows : false,
          width: 600,
          height: 500,
          helpers: {
            overlay: {
              locked: false
            }
          }
      });
  });
  //click device icons
  $(document).on('click','.device-icons li',function(event) {
  		$('#pagebuilder-preview-wrapper').removeClass();
  		$('#pagebuilder-preview-wrapper').addClass($(this).data('device') + '-layout');
  		$('.device-icons li').removeClass('active');
      $('#tool-device .dropbtn').html($(this).find('.icon').html());
  		$(this).addClass('active');

      var device_class = $(this).data('device');
      $('.pb-device-tabs').each(function(){
          $(this).removeClass('pb-device-md pb-device-sm pb-device-xs');
          $(this).addClass('pb-device-' + device_class);
      });
      $('.pb-screen-inputs').each(function(){
        $(this).removeClass('pb-device-md pb-device-sm pb-device-xs');
        $(this).addClass('pb-device-' + device_class);
      });
	});
  //Click body to close dropdown
  $(document).click(function(){
      $(".dropdown").removeClass('open');
  });

  //search addon
  $(document).on('keyup','#search-addon',function(event) {
      var filter, ul, li, txtValue;
      filter = $(this).val().toUpperCase();
      li = $(".pagebuilder-addons li.addon-cat-addons");
      li.each(function(){
          txtValue = $(this).find('.element-title').text();
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              $(this).show();
          } else {
              $(this).hide();
          }
      });
	});

  genID = function() {
      return Math.random().toString(36).substr(2, 9);
  }
  customTemplateFn = function(addonid, templatefn, data) {
      obj = {};
      obj['addonid'] = addonid;
      Object.keys(data).forEach(function(key) {
          config = data[key];
          if (config.multilang == '1') {
            obj[config.name] = config.value[default_language];
          } else {
            if(config.type == 'screen-range') {
              var val_arr = config.value.split('-');
              obj[config.name + '_md'] = val_arr[0];
              obj[config.name + '_sm'] = val_arr[1];
              obj[config.name + '_xs'] = val_arr[2];
            }
            obj[config.name] = config.value;
          }
      });
      return templatefn(obj);
  }
  addAddon = function(addonName) {
      iframeDoc = window.iframeDoc;
      var arr_addondefaults = JSON.parse(addonDefaults);
      var addonTemplate = iframeDoc.getElementById("pb-tmpl-addon-" + addonName).innerHTML;
      var templateFn = _.template(addonTemplate);
      var addonID = 'addon-' + genID();
      // var addonTemplate = customTemplateFn(addonID, templateFn, arr_addondefaults[addonName]);
      var addonToolsTemplate = $("#pb-tmpl-addon-tools").clone(true);
      // addonToolsTemplate.appendTo($(addonTemplate));
      var addonHtml = $(`<div class="addon-box" data-id="${addonID}" data-name="${addonName}"></div>`);
      addonHtml.append($("#pb-tmpl-addon-tools").html());
      addonHtml.append($('<div class="addon-body"></div>'));
      addonHtml.data('setting', arr_addondefaults[addonName]);
      addonHtml.data('update', templateFn);
      addonHtml.attr('id', addonID);
      addonHtml.attr('data-name', addonName);
      return addonHtml;
  }
  /*
  */
  newColumnSetting = function(width) {
    setting = JSON.parse(colSettings);
    setting.lg_col = 'col-lg-'+width;
    setting.sm_col = 'col-sm-'+width;
    setting.xs_col = 'col-xs-'+width;
    return setting;
  }
  /*
    Copy data from addon1 to addon2
  */
  copyAddonData = function(addon1, addon2) {
    setting = JSON.parse(JSON.stringify(addon1.data('setting')));
    update = addon1.data('update');
    addon2.data('setting', setting);
    addon2.data('update', update);
    addon2.attr('id', `addon-${genID()}`);
    $('#gdz-configuration').data('component', addon2);
    updateComponent(addon2, addon2.data('setting'));
  }
  /*
    Copy data from column 1 to column 2
  */
  copyColData = function(col1, col2) {
    setting = JSON.parse(JSON.stringify(col1.data('setting')));
    col2.data('setting', setting);
    col2.attr('id', `column-${genID()}`);
    updateColumn(col2, col2.data('setting'));
  }
  /*
  */
  copyRowData = function(row1, row2) {
    setting = JSON.parse(JSON.stringify(row1.data('setting')));
    row2.data('setting', setting);
    row1.find('.addon-box').each(function(i, e) {
      addonID = $(e).attr('id');
      addonClone = row2.find(`#${addonID}`);
      copyAddonData($(e), addonClone);
    });
    row1.find('.layout-column').each(function(i, e) {
      colID = $(e).attr('id');
      colClone = row2.find(`#${colID}`);
      copyColData($(e), colClone);
    });
    row2.attr('id', `row-${genID()}`);
    updateRow(row2, row2.data('setting'));
  }
  sortableAddon = function(e) {
    $(e).find('.addon-sortable').sortable({
      placeholder: "ui-state-highlight",
      connectWith: ".addon-sortable",
      scroll: true,
      scrollSensitivity: 400,
      scrollSpeed: 13
    });
  }
  /*
  */
  showRowSetting = function() {
      settingPanel = $('#row-settings');
      activeRow = settingPanel.data('activeRow');
      setting = activeRow.data('setting');
      $('.config-heading .config-title').html('Row Setting');
      $('#gdz-configuration').html(settingPanel.children().clone(true));
      $('#gdz-configuration').find('.addon-input').each(function(){
        let $that = $(this);
        let attrValue = $that.data('attrname');
        $that.setInputValue({filed: setting[attrValue]});
      });
      reLoadUI();
      $('#gdz-configuration').parent().show();
  }
  showColumnSetting = function() {
      settingPanel = $('#column-settings');
      activeColumn = settingPanel.data('activeColumn');
      setting = activeColumn.data('setting');
      $('.config-heading .config-title').html('Column Setting');
      $('#gdz-configuration').html(settingPanel.children().clone(true));
      $('#gdz-configuration').find('.addon-input').each(function(){
        let $that = $(this);
        let attrValue = $that.data('attrname');
        $that.setInputValue({filed: setting[attrValue]});
      });
      reLoadUI();
      $('#gdz-configuration').parent().show();
  }
  assignData = function(pageObj, dom) {
      pageObj.forEach(function(row) {
        rowId = row.id;
        if (rowId)
          $(dom).find(`#${rowId}`).data('setting', row.settings);
        row.cols.forEach(function(col) {
          colId = col.id;
          if (colId)
            $(dom).find(`#${colId}`).data('setting', col.settings);
          col.addons.forEach(function(addon) {
            addonId = addon.id;
            if (addonId) {
              addonTemplate = window.iframeDoc.getElementById("pb-tmpl-addon-" + addon.type).innerHTML;
              templateFn = _.template(addonTemplate);
              $(dom).find(`#${addonId}`).data('setting', addon.fields);
              $(dom).find(`#${addonId}`).data('update', templateFn);
            }
          })
        })
      })
  }
  ConditionCheck = function(leftValue, rightValue, operator) {
      switch (operator) {
          case '==':
              return leftValue == rightValue;
          case '!=':
              return leftValue != rightValue;
          case '<=':
              if (jQuery.inArray(leftValue, rightValue) == -1) {
                  return false;
              } else {
                  return true;
              }
          default:
              return leftValue === rightValue;
      }
  }
  reLoadUI = function(component) {
      $('.items-container').sortable({
          placeholder: "ui-state-highlight",
          connectWith: ".items-container",
          update: function( event, ui ) {$(this).closest('.repeat-input').trigger('change')},
      });
      $('.pb-range').each(function(){
          $(this).val($(this).next().val());
      })
      $('#gdz-configuration').find('.pagebuilder-checkbox').on('click',function(event) {
        var _cb = $(this).find('.gdz-switch');
        if(_cb.is(':checked'))
          _cb.prop('checked', false);
        else
          _cb.prop('checked', true);
        _cb.trigger('change');
      });
      $('#gdz-configuration').find('.gdz-switch').each(function(){
        $(this).parent().append('<label for="field_use_link"><span><span></span><strong class="pagebuilder-checkbox-1">YES</strong><strong class="pagebuilder-checkbox-2">NO</strong></span></label>');
        // $(this).parent().trigger('click');
      });
      $('#gdz-configuration').find('.color-picker-component').colorpicker();
      setTimeout(function() {
        tinySetup({
          selector :"#gdz-configuration .gdz-editor",
          setup:function(ed) {
            ed.on('change', function(e) {
              textarea = tinyMCE.get(ed.id).getElement();
              $(textarea).val(ed.getContent());
              $(textarea).trigger('change');
            });
            ed.on('keyup', function(e) {
              textarea = tinyMCE.get(ed.id).getElement();
              $(textarea).val(ed.getContent());
              $(textarea).trigger('keyup');
            });
          }
        });
      }, 1000);
      $('.gdz-modal-body').find('.condition-setting').each(function () {
          var $field = $(this);
          var condition = JSON.parse($(this).attr('data-condition'));
          $.each(condition, function (input, value) {
              var parsedValue = value.match(/(\w+)(?:\[(\w+)])?/gi),
                  conditionValue = undefined;
              var conditionOperator = value.match(/(\!=|<=|==)(?:\[(\w+)])?/gi)[0];

              var $checker = $('.gdz-modal-body').find('input[data-field=' + input + '], select[data-field=' + input + ']');
              var checkerVal = $checker.val();
              if ($checker.attr('type') == 'radio') {
                  checkerVal = $('input[name=' + input + ']:checked').val();
              }
              if ($checker.attr('type') == 'select') {
                  checkerVal = $('input[name=' + input + ']:selected').val();
              }
              if($checker.attr('data-type') == 'checkbox2') {
                  if($('input[name=' + input + ']').is(":checked"))
                    checkerVal = 1;
                  else
                    checkerVal = 0;
              }
              if (parsedValue) {
                  conditionValue = parsedValue[0];
              } else {
                  conditionValue = '';
              }

              if (conditionOperator == '<=') {
                  conditionValue = parsedValue;
              }
              if (ConditionCheck(checkerVal, conditionValue, conditionOperator)) {
                  $field.addClass('show-setting');
              } else {
                  $field.removeClass('show-setting');
              }
              $checker.on('change input', function () {
                  if($(this).attr('data-type') == 'checkbox2') {
                      if($(this).is(":checked"))
                        var this_val = 1;
                      else
                        var this_val = 0;
                  } else {
                    var this_val = this.value;
                  }
                  if (ConditionCheck(this_val, conditionValue, conditionOperator)) {
                      $field.addClass('show-setting');
                  } else {
                      $field.removeClass('show-setting');
                  }
              });
          });
      });
      var form_group = $('.gdz-modal-body').find('.item-inner > .form-group');
      var under_tab = false;
      var tab_open = false;
      form_group.each(function () {
        if($(this).hasClass('group-tab')) {
            under_tab = true;
            if($(this).hasClass('tab-open')) {
              tab_open = true;
            } else {
              tab_open = false;
            }
        }
        if(under_tab && !$(this).hasClass('group-tab')) $(this).addClass('under-tab');
        if(under_tab && tab_open && !$(this).hasClass('group-tab')) $(this).addClass('field-open');
      });
      form_group.on('click',function(event) {
          if($(this).hasClass('group-tab')) {
              var tab_start = form_group.index(this);
              var tab_end = form_group.length;
              for(i=tab_start+1; i < form_group.length; i++) {
                  if(form_group.eq(i).hasClass('group-tab'))
                      tab_end = i;
              }
              if($(this).hasClass('tab-open')) {
                $(this).removeClass('tab-open');
                for(i=tab_start; i < tab_end; i++) {
                    form_group.eq(i).removeClass('field-open');
                }
              } else {
                $(this).addClass('tab-open');
                for(i=tab_start; i < tab_end; i++) {
                    form_group.eq(i).addClass('field-open');
                }
              }
          }
      });
      var icons = JSON.parse(awesomeIcons);
      $('.gdz-modal-body').find('input[name=icon_class]').autocomplete({
        source: icons
      });
      $('.gdz-modal-body').find('input[name=icon_class]').autocomplete( "option", "appendTo", ".eventInsForm" );
  }
  /*
  show configuration panel on left
  component: addon box corresponding to the configuration
  */
  showConfiguration = function(component) {
      iframeDoc = window.iframeDoc;
      componentID = component.attr('data-id');
      addonName = component.attr('data-name');
      setting = component.data('setting');
      $(iframeDoc).find('.addon-box.active').removeClass('active');
      component.addClass('active');
      $('.config-heading .config-title').html(addonTitles[addonName]);
      panel = $('#gdz-configuration');
      configuration = document.getElementById("pb-config-addon-" + addonName).innerHTML;
      panel.html(configuration);
      panel.data('setting', setting);
      panel.data('component', component);
      setting.forEach(function(s) {
          value = s.value;
          if (s.multilang == '1') {
            Object.keys(value).forEach(function(lang) {
              input = panel.find(`[data-field='${s.name}'][data-lang='${lang}']`);
              input.setInputValue({filed: value[lang]});
            })
          } else {
            input = panel.find(`[data-field='${s.name}']`);
            input.setInputValue({filed: value});
          }
      })
      panel.parent().show();
      reLoadUI();

  }
  /*
      update addon box
      component: addon box component
      setting: configuration setting input
  */
  updateComponent = function(component, setting) {
      update = component.data('update');
      component.find('.addon-body').html(customTemplateFn(component.attr('id'), update, setting));
      checkEmpty(iframeDoc);
  }
  /*
      update column
      row: jquery row object
      setting: object of field and value
  */
  updateColumn = function(column, setting) {
      colStyleTemplate = $('#col_style_template').text();
      templateFn = _.template(colStyleTemplate);
      params = Object.assign({}, setting);
      params.col_id = column.attr('id');
      style = templateFn(params);
      colStyle = column.find('.col-style');
      class_map = {
        middle_align: "middle-align",
        hidden_mobile: "pb-hidden-xs",
        hidden_tablet: "pb-hidden-sm",
        hidden_desktop: "pb-hidden-lg",
        top: "top-align",
        middle: "middle-align",
        bottom: "bottom-align",
      };
      style_map = {
        text_color: 'color',
        background_color: 'background-color',
        background_img: 'background-image',
        background_size: 'background-size',
        background_repeat: 'background-repeat',
        background_position: 'background-position',
        background_attachment: 'background-attachment',
        animation_duration: 'animation-duration',
        animation_delay: 'animation-delay',

      }
      classname = ["layout-column", "addon-sortable", "ui-sortable"];
      Object.keys(setting).forEach(function(field) {
          value = setting[field];
          switch (field) {
              case 'custom_class':
              case 'lg_col':
              case 'xs_col':
              case 'sm_col':
                  if (value)
                      classname.push(value);
                  break;
              case 'animation':
                  if (value) {
                      classname.push('animated');
                      classname.push(value);
                  }
                  break;
              case 'middle_align':
              case 'hidden_mobile':
              case 'hidden_tablet':
              case 'hidden_desktop':
                  value = parseInt(value);
                  if (value)
                      classname.push(class_map[field]);
                  break;
              case 'content_align':
                  classname.push(class_map[value]);
                  break;
          }
      });
      column.attr('class', classname.join(' '));
      if (colStyle.length)
          colStyle.html(style);
      else
          column.prepend($('<style type="text/css" class="col-style"></style>').html(style));
      /*column.addClass('infinite');
      setTimeout(function(){
        column.removeClass('infinite');
      }, 3000);*/
  }
  /*
      update row
      row: jquery row object
      setting: object of field and value
  */
  updateRow = function(row, setting) {
      rowStyleTemplate = $('#row_style_template').text();
      templateFn = _.template(rowStyleTemplate);
      params = Object.assign({}, setting);
      params.row_id = row.attr('id');
      style = templateFn(params);
      rowStyle = row.find('.row-style');
      classname = ['gdz-row'];
      class_map = {
        middle_align: "middle-align",
        hidden_mobile: "pb-hidden-xs",
        hidden_tablet: "pb-hidden-sm",
        hidden_desktop: "pb-hidden-lg",
        top: "top-align",
        middle: "middle-align",
        bottom: "bottom-align"
      };
      Object.keys(setting).forEach(function(field) {
          value = setting[field];
          switch (field) {
              case 'fluid':
                  value = parseInt(value);
                  array = ['container', 'container-fluid'];
                  row.find('.pb-row-inner').removeClass(array[value^1]).addClass(array[value]);
                  break;
              case 'custom_class':
                  if (value)
                      classname.push(value);
                  break;
              case 'animation':
                  if (value) {
                      classname.push('animated');
                      classname.push(value);
                  }
                  break;
              case 'middle_align':
              case 'hidden_mobile':
              case 'hidden_tablet':
              case 'hidden_desktop':
                  value = parseInt(value);
                  if (value)
                      classname.push(class_map[field]);
                  break;
              case 'content_align':
                  classname.push(class_map[value]);
                  break;
          }
      })
      row.attr('class', classname.join(' '));
      if (rowStyle.length)
          rowStyle.html(style);
      else
          row.prepend($('<style type="text/css" class="row-style"></style>').html(style));
  }
  /*
  */
  getLayout = function(iframeDoc) {
      rows = $(iframeDoc).find('section#content').find('div[id^="row"]');
      config = [];
      rows.each(function(i, e) {
          rowConfig = {
              'type'    : 'row',
              'id'      : $(this).attr('id'),
              'name'    : '',
              'layout'  : $(this).data('layout'),
              'settings'  : $(this).data('setting'),
              'cols'    : []
          };
          columns = $(this).find('.layout-column');

          columns.each(function(cindex) {
              colConfig = {
                  'type'        : 'column',
                  'className'     : $(this).attr('class'),
                  'id'            : $(this).attr('id'),
                  'settings'      : $(this).data('setting'),
                  'addons'    : []
              };
              var addons = $(this).find('.addon-box');
              addons.each(function(aindex) {
                  addonConfig = {
                      'id'          : $(this).attr('id'),
                      'type'        : $(this).attr('data-name'),
                      'settings'      : {
                        'active' : 1,
                        'addon'  : $(this).attr('data-name'),
                      },
                      'fields'      : $(this).data('setting'),
                  };
                  colConfig.addons.push(addonConfig);
              });
              rowConfig.cols.push(colConfig);
          })
          config.push(rowConfig);
      });
      config = JSON.stringify(config);
      return config;
  }
  savePage = function(iframeDoc) {
      $('.pagebuilder-preview-overlay').show();
      config = getLayout(iframeDoc);
      $.ajax({
          type: 'POST',
          url: PagebuilderConfig.editor_link + '&action=SavePage&ajax=1',
          data: {
              jsonparams: config,
              page_id: $('#select-page').val(),
          },
          success: function(data)
          {
              setTimeout(function(){
                  $('.pagebuilder-preview-overlay').addClass('completed');
              }, 2000);
              setTimeout(function(){
                  $('.pagebuilder-preview-overlay').removeClass('completed');
                  $('.pagebuilder-preview-overlay').hide();
              }, 3000);
          }
      });
  }
  saveTemplate = function(iframeDoc) {
      config = getLayout(iframeDoc);
      if($('#library-template-name').val() == '') {
          alert('Please enter template name');
          return;
      }
      $.ajax({
          type: 'POST',
          url: PagebuilderConfig.editor_link + '&action=SaveTemplate&ajax=1',
          data: {
              jsonparams: config,
              templatename: $('#library-template-name').val(),
          },
          success: function(data)
          {
              switchDialogForm('library');
          }
      });
  }
  checkEmpty = function(iframeDoc) {
      $(iframeDoc).find('.gdz-row').each(function(event) {
          var row_layout = $(this).attr('data-layout');
          $(this).find('.pb-column-list li a').removeClass('active');
          $(this).find('.pb-column-list li a').each(function(event) {
              if($(this).attr('data-layout') == row_layout) $(this).addClass('active');
          });
      });
      $(iframeDoc).find('#wrapper .layout-column').each(function(event) {
          if($(this).find('.addon-box').length == 0)
            $(this).addClass('column-empty');
          else
            $(this).removeClass('column-empty');
      });
      $(iframeDoc).find('.addon-box').each(function(event) {
          if($(this).find('.addon-body > *').length == 0) {
              $(this).addClass('addon-empty');
          } else if($(this).attr('data-name') == 'popup') {
            $(this).addClass('addon-empty');
          } else {
            $(this).removeClass('addon-empty');
          }
      });
  }
  rowLayoutOpen = function(iframeDoc) {
      $(iframeDoc).find('.row-layout-setting').on('click', function(event) {
          if(!$(this).parent().hasClass('show')) {
            $(this).closest('.gdz-row').addClass('row-layout-open');
          } else {
            $(this).closest('.gdz-row').removeClass('row-layout-open');
          }
      });
  }
  //Drag & Drop Init Function
  dragDropInit = function(iframeDoc) {
      var dragged;
      $(".addon-cat-addons").on('dragstart',function(event) {
          dragged = event.target;
      });
      // back to addon list
      $("#back").click(function(e) {
          $(this).closest('.gdz-configuration').hide();
          $('#gdz-configuration').data('component').removeClass('active');
      })
      // save
      $('#save').click(function(e) {
          savePage(iframeDoc);
      })
      // save template
      $('#library-save-template').click(function(e) {
          event.preventDefault();
          event.stopPropagation();
          saveTemplate(iframeDoc);
      })
      // on config field change
      $('#gdz-configuration').on('change', '.tree-folder input[type=checkbox]', function(e) {
          tree = $(this).closest('.cattree');
          arrayInput = tree.find(':input').serializeArray().map(function(e) {
              return e.value;
          });
          field = $(this).attr('name').replace('[]', '');
          setting = $('#gdz-configuration').data('setting');
          component = $('#gdz-configuration').data('component');
          index = _.findKey(setting, {'name': field});
          setting[index]['value'] = arrayInput.join(',');
          updateComponent(component, setting);
      })
      $('#gdz-configuration').on('change', '.tree-folder input[type=radio]', function(e) {
          tree = $(this).closest('.cattree');
          var categories = tree.find('input[type=radio]');
          var categories_result = new Array();
          var result = '';
          categories.each(function(catindex) {
            if ($(this).is(":checked")) {
              result =  $(this).val();
            }
          });
          field = $(this).attr('name');
          setting = $('#gdz-configuration').data('setting');
          component = $('#gdz-configuration').data('component');
          index = _.findKey(setting, {'name': field});
          setting[index]['value'] = result;
          updateComponent(component, setting);
      })
      //on row setting change
      $('#gdz-configuration').on('change keyup', '.row-settings input, .row-settings select', function(e) {
        var $this = $(this);
        $attrname = $this.data('attrname');
        settingPanel = $('#row-settings');
        activeRow = settingPanel.data('activeRow');
        config = activeRow.data('setting');
        config[$attrname] = $this.getInputValue();
        updateRow(activeRow, config);
      })
      //on column setting change
      $('#gdz-configuration').on('change keyup', '.column-settings input, .column-settings select', function(e) {
        var $this = $(this);
        $attrname = $this.data('attrname');
        settingPanel = $('#column-settings');
        activeColumn = settingPanel.data('activeColumn');
        config = activeColumn.data('setting');
        config[$attrname] = $this.getInputValue();
        updateColumn(activeColumn, config);
      })
      $(iframeDoc).on('dragenter', '.layout-column', function(event)
      {
          event.preventDefault();
          event.stopPropagation();
          $(this).addClass('dragging');
          $(iframeDoc).find('.ui-state-highlight').remove();
          if($(dragged).hasClass('addon-cat-addons') && !$(dragged).hasClass('pro') && ($(dragged).find('.disabled').length == 0)) {
              if(!$(event.target).hasClass('layout-column')) {
                  var target = $(event.target).offset();
                  var des_box = $(event.target).closest('.addon-box').offset();
                  if(des_box) {
                      var des_h = $(event.target).closest('.addon-box').outerHeight();
                      var dy = target.top - des_box.top;
                      if(dy > des_h/2) {
                        $("<div class='ui-state-highlight'></div>").insertAfter($(event.target).closest('.addon-box'));
                      } else {
                        $("<div class='ui-state-highlight'></div>").insertBefore($(event.target).closest('.addon-box'));
                      }
                  }
              } else {
                  $(event.target).append("<div class='ui-state-highlight'></div>");
              }
          }
      }).on('dragover',function(event)
      {
          event.preventDefault();
          event.stopPropagation();
      });
      $(iframeDoc).on('drop', '.layout-column',function(event) {
          event.preventDefault();
          event.stopPropagation();
          if($(dragged).hasClass('addon-cat-addons') && !$(dragged).hasClass('pro') && ($(dragged).find('.disabled').length == 0)) {
              dragged.style.opacity = '';
              var addonWidget = $(dragged).find('.addon-widget');
              var addonName = $(addonWidget).data('addon');
              addonHtml = addAddon(addonName);
              if(!$(event.target).hasClass('layout-column')) {
                  var target = $(event.target).offset();
                  var des_box = $(event.target).closest('.addon-box').offset();
                  if(des_box) {
                    var des_h = $(event.target).closest('.addon-box').outerHeight();
                    var dy = target.top - des_box.top;
                    if(dy > des_h/2)
                      addonHtml.insertAfter($(event.target).closest('.addon-box'));
                    else
                      addonHtml.insertBefore($(event.target).closest('.addon-box'));
                  }
              } else {
                  addonHtml.appendTo(event.target);
              }
              // show config and update
              showConfiguration(addonHtml);
              setting = $('#gdz-configuration').data('setting');
              //remove tab in setting
              for(i = 0; i < setting.length; i++) {
                  if(setting[i]['type'] == 'tab') {
                    setting.splice(i, 1);
                  }
              }
              component = $('#gdz-configuration').data('component');
              updateComponent(component, setting);
              $(iframeDoc).find('.ui-state-highlight').remove();
              dragged = null;
              checkEmpty(iframeDoc);
          }
      });
      $(iframeDoc).on('dragenter', '.row-add', function(event)
      {
          event.preventDefault();
          event.stopPropagation();
          $(this).addClass('dragging');
          $(iframeDoc).find('.ui-state-highlight').remove();
          if($(dragged).hasClass('addon-cat-addons') && !$(dragged).hasClass('pro') && ($(dragged).find('.disabled').length == 0)) {
              $(event.target).append("<div class='ui-state-highlight'></div>");
          }
      }).on('dragover',function(event)
      {
          event.preventDefault();
          event.stopPropagation();
      });
      $(iframeDoc).on('drop', '.row-add',function(event) {
          event.preventDefault();
          event.stopPropagation();
          if($(dragged).hasClass('addon-cat-addons') && !$(dragged).hasClass('pro') && ($(dragged).find('.disabled').length == 0)) {
              var rowClone = $('#pb-tmpl-row .gdz-row').clone(true);
              rowClone.data('setting', JSON.parse(rowSettings));
              $(rowClone).attr("id", 'row-' + genID());
              var layoutType = '12';
              var newColumns = ['12'];
              var colHtml = '';
              $(rowClone).attr('data-layout', layoutType);
              $(rowClone).data('layout', layoutType);
              var colClone = $('#pb-tmpl-column .layout-column').clone(true);
              colClone.addClass('col-lg-12');
              colClone.addClass('column-empty');
              colClone.attr('id', "column-" + genID());
              colClone.data('setting', newColumnSetting(12));
              $(rowClone).find('.row').append(colClone);
              var currentRow = $(this).closest('.row-add');
              $(rowClone).insertBefore($(currentRow));
              dragged.style.opacity = '';
              var addonWidget = $(dragged).find('.addon-widget');
              var addonName = $(addonWidget).data('addon');
              addonHtml = addAddon(addonName);
              addonHtml.appendTo($(rowClone).find('.layout-column'));
              // show config and update
              showConfiguration(addonHtml);
              setting = $('#gdz-configuration').data('setting');
              //remove tab in setting
              for(i = 0; i < setting.length; i++) {
                  if(setting[i]['type'] == 'tab') {
                    setting.splice(i, 1);
                  }
              }
              component = $('#gdz-configuration').data('component');
              updateComponent(component, setting);
              $(iframeDoc).find('.ui-state-highlight').remove();
              $('.row-add').removeClass('dragging');
              dragged = null;
              checkEmpty(iframeDoc);
          }
          $(iframeDoc).find('.addon-sortable').sortable({
              placeholder: "ui-state-highlight",
              connectWith: ".addon-sortable",
              scroll: true,
              scrollSensitivity: 400,
              scrollSpeed: 13,
              update: function(event, ui) {
                checkEmpty(iframeDoc);
              }
          });
          rowLayoutOpen(iframeDoc);
          checkEmpty(iframeDoc);
      });
  }
  //Iframe on load
  $('#pagebuilder-preview-iframe').on('load',function () {
      var iframeWin = this.contentWindow;
      var iframeDoc = iframeWin.document;
      window.iframeDoc = iframeDoc;
      var iframeBody = iframeDoc.body,
            jQueryLoaded = false,
            jQuery;
      checkEmpty(iframeDoc);
      $(iframeDoc).find('#main').on('carousel', ".carousel-tpl", function() {
          $(this).owlCarousel('destroy');
          $(this).owlCarousel({
              loop:!0,
              margin:$(this).data("margin"),
              nav:$(this).data("nav"),
              dots:$(this).data("dots"),
              autoplay:$(this).data("auto"),
              rewind:$(this).data("rewind"),
              slideBy:$(this).data("slidebypage"),
              responsive: {
                  0:{
                      items:$(this).data("xs")
                  },
                  576:{
                      items:$(this).data("sm")
                  },
                  992:{
                      items:$(this).data("md")
                  }
              }
          })
      })

      //assign json to elements
      addonTitles = JSON.parse(addonTitles);
      pageObj = JSON.parse(pagejson?pagejson:'[]');
      assignData(pageObj, iframeDoc);
      //Click Iframe to close dropdown
      $(iframeDoc).click(function(){
          $(".dropdown").removeClass('open');
      });
      //Add New Row
      $(iframeDoc).on('click', '.pb-add-row .column-layout', function(event) {
          event.preventDefault();
          var rowClone = $('#pb-tmpl-row .gdz-row').clone(true);
          rowClone.data('setting', JSON.parse(rowSettings));
          $(rowClone).attr("id", 'row-' + genID());
          layoutType = $(this).data('layout');
          if(layoutType == 'custom') {
              layoutType = $(this).parent().parent().find('.custom-layout').val();
          }
          if(layoutType == '12')
      			var newColumns = ['12'];
          else
            var newColumns = layoutType.split(',');
          var colHtml = '';
          $(rowClone).attr('data-layout', layoutType);
          $(rowClone).data('layout', layoutType);
          $.each(newColumns, function(index, value){
              var colClone = $('#pb-tmpl-column .layout-column').clone(true);
              colClone.addClass('col-lg-' + value);
              colClone.addClass('column-empty');
              colClone.attr('id', "column-" + genID());
              colClone.data('setting', newColumnSetting(value));
              $(rowClone).find('.row').append(colClone);
          });
      		var currentRow = $(this).closest('.gdz-row');
          if(!$(currentRow).hasClass('row-add'))
              $(rowClone).insertAfter($(currentRow));
          else
              $(rowClone).insertBefore($(currentRow));
          $(iframeDoc).find('.addon-sortable').sortable({
              placeholder: "ui-state-highlight",
              connectWith: ".addon-sortable",
              scroll: true,
              scrollSensitivity: 400,
              scrollSpeed: 13,
              update: function(event, ui) {
                checkEmpty(iframeDoc);
              }
          });
          $(this).closest('.dropdown-menu').removeClass('show');
          rowLayoutOpen(iframeDoc);
          checkEmpty(iframeDoc);

      });
      rowLayoutOpen(iframeDoc);
      //Add New Template
      $(iframeDoc).on('click', '.pb-add-template', function(event) {
        $('#template-library').trigger('click');
      });
      //Edit Row Layout
      $(iframeDoc).on('click', '.pb-row-layout .column-layout', function(event) {
          event.preventDefault();
          layoutType = $(this).data('layout');
          if(layoutType == 'custom') {
              layoutType = $(this).parent().parent().find('.custom-layout').val();
          }
          var rowBox = $(this).closest('.gdz-row').find('.row');
          rowBox.addClass('row-active');
          $(this).closest('.gdz-row').attr('data-layout', layoutType);
          $(this).closest('.gdz-row').data('layout', layoutType);
          var oldColumns = rowBox.find('.layout-column');
          if(layoutType == '12')
              var newColumns = ['12'];
          else
              var newColumns = layoutType.split(',');
          var n_oldColumns = oldColumns.length;   //2
          var n_newColumns = newColumns.length;//1
          div = $('<div></div>');
          $.each(newColumns, function(index, value){
              old_col = oldColumns.eq(index);
              var old_col_datas = old_col.data();
              old_col_id = old_col.attr('id');
              if(index < n_oldColumns) {
                var html = old_col;
                html.attr('class', 'addon-sortable layout-column col-lg-' + value);
              } else {
                html = $('<div class="addon-sortable layout-column col-lg-' + value + '" id="column-'+ genID() + '"></div>');
                var colClone = $('#pb-tmpl-column .layout-column').clone(true);
                colClone.addClass('col-lg-' + value);
                colClone.addClass('column-empty');
                colClone.attr('id', "column-" + genID());
                colClone.data('setting', newColumnSetting(value));
                html = colClone;
              }
              html.data('setting', newColumnSetting(value));
              div.append(html);
          });
          if(n_oldColumns > n_newColumns)
            for(i = n_newColumns; i < n_oldColumns; i++)
              div.find('.layout-column').eq(n_newColumns - 1).append(oldColumns.eq(i).children());
          rowBox.html(div.children());
          $(iframeDoc).find('.addon-sortable').sortable({
              scroll: true,
              scrollSensitivity: 400,
              scrollSpeed: 13,
              placeholder: "ui-state-highlight",
              connectWith: ".addon-sortable",
              update: function(event, ui) {
                checkEmpty(iframeDoc);
              }
          });
          $(this).closest('.pb-row-layout').trigger('click');
          $(this).closest('.gdz-row').removeClass('row-layout-open');
          checkEmpty(iframeDoc);
      });
      //setting Row
      $(iframeDoc).on('click', '.pb-row-setting', function(event) {
          event.preventDefault();
          row = $(this).closest('.gdz-row');
          $('#row-settings').data('activeRow', row);
          showRowSetting();
      });
      //Remove Row
      $(iframeDoc).on('click', '.pb-row-delete', function(event) {
      		event.preventDefault();
      		if ( confirm("Click Ok button to delete this Row, Cancel to leave.") == true ) {
        			$(this).closest('.gdz-row').slideUp(200, function(){
        				$(this).remove();
                $('.gdz-configuration').hide();
        			});
      		}
    	});
      //Duplicate Row
      $(iframeDoc).on('click', '.pb-row-duplicate', function(event) {
      		event.preventDefault();
          row = $(this).closest('.gdz-row');
      		var rowClone = row.clone();
          copyRowData(row, rowClone);
          rowClone.insertAfter(row);
          sortableAddon(rowClone);
    	});
      //setting Column
      $(iframeDoc).on('click', '.pb-column-setting', function(event) {
          event.preventDefault();
          event.stopPropagation();
          column = $(this).closest('.layout-column');
          $('#column-settings').data('activeColumn', column);
          showColumnSetting();
      });
      //Remove Addon
      $(iframeDoc).on('click', '.pb-addon-delete', function(event) {
          event.preventDefault();
          if ( confirm("Click Ok button to delete this Addon, Cancel to leave.") == true ) {
              $(this).closest('.addon-box').slideUp(200, function(){
                  $('.gdz-configuration').hide();
                  $(this).remove();
                  checkEmpty(iframeDoc);
              });

          }
      });
      //edit addon
      $(iframeDoc).on('click', '.pb-addon-setting', function(event) {
          event.preventDefault();
          component = $(this).closest('.addon-box');
          showConfiguration(component);
      });
      //click to addon box
      $(iframeDoc).on('click', '.addon-box', function(event) {
          event.preventDefault();
          event.stopPropagation();
          component = $(this);
          showConfiguration(component);
      });
      $(iframeDoc).on('click', '.pb-addon-duplicate', function(event) {
          event.stopPropagation();
          event.preventDefault();
          addon = $(this).closest('.addon-box');
          var addonClone = addon.clone();
          copyAddonData(addon, addonClone);
          addonClone.insertAfter(addon);
          showConfiguration(addonClone);
      });
      //click to column box
      $(iframeDoc).on('click', '.gdz-popup-overlay', function(event) {
          event.stopPropagation();
          event.preventDefault();
          $(this).closest('.addon-box').removeClass('active');
          $(this).closest('.addon-box').unbind('mouseenter mouseleave')


          //$('.gdz-configuration').hide();
      });
      $(iframeDoc).on('click', '.layout-column', function(event) {
          event.preventDefault();
          event.stopPropagation();
          $('.gdz-configuration').hide();
      });
      //Drag Drop Addons
      dragDropInit(iframeDoc);

      //Sortable
      function loadJQueryUI() {
            iframeBody.removeChild(jQuery);
            jQuery = null;

            iframeWin.jQuery.ajax({
                url: 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js',
                dataType: 'script',
                cache: true,
                success: function () {
                    $(iframeDoc).find('.row-sortable').sortable({
                      items : '> .gdz-row:not(:last)',
                      placeholder: "ui-state-highlight",
                      connectWith: ".row-sortable"
                  	});
                    $(iframeDoc).find('.addon-sortable').sortable({
                      placeholder: "ui-state-highlight",
                      connectWith: ".addon-sortable",
                      scroll: true,
                      scrollSensitivity: 400,
                      scrollSpeed: 13,
                      update: function(event, ui) {
                          checkEmpty(iframeDoc);
                      }
                  	});
                }
            });
        }
        jQuery = iframeDoc.createElement('script');

        // based on https://gist.github.com/getify/603980
        jQuery.onload = jQuery.onreadystatechange = function () {
            if ((jQuery.readyState && jQuery.readyState !== 'complete' && jQuery.readyState !== 'loaded') || jQueryLoaded) {
                return false;
            }
            jQuery.onload = jQuery.onreadystatechange = null;
            jQueryLoaded = true;
            loadJQueryUI();
        };

        jQuery.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js';
        iframeBody.appendChild(jQuery);
  });
  //end Iframe Load

});
jQuery(window).on("load",function(){
    const toolAddons = document.querySelector('#tool-addons');
    const ps1 = new PerfectScrollbar(toolAddons);
    const toolAddons2 = document.querySelector('#gdz-configuration');
    const ps2 = new PerfectScrollbar(toolAddons2);
});
