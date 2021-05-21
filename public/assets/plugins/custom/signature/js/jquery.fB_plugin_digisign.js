  if (!window.fbControls){  window.fbControls = new Array();}
        window.fbControls.push(function (controlClass) {

            class controlDigiSign extends controlClass {

                static get definition() {
                    return {
                        icon: '✅',
                        i18n: {
                            default: 'Digital Signatures',
                        },
                    }
                }

                configure() {
                    this.js =[
                        './jquery.ui.touch-punch.min.js',
                        './jquery.signature.min.js'
                    ];
                    this.css = [
                        '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css',
                        '../css/jquery.signature.css'
                    ];
                }

                /**
                 * build a text DOM element, supporting other jquery text form-control's
                 * @return DOM Element to be injected into the form.
                 */
                build() {
                    let isreq=(this.config.required)?'required':'';
                    console.log('req config:',this.config);
                    /*return  '<div id="'+this.config.id+'" class="digisigns"><input class="digisigns-input" name="'+this.config.name+'" type="hidden" '+isreq+' />' +
                        '<button class="digisigns-clear-btn">Clear</button></div>'*/
                    return this.markup('div', '<input class="digisigns-input" name="'+this.config.name+'" type="hidden" '+isreq+' />' +
                        '<button class="digisigns-clear-btn">Clear</button>', {id: this.config.id,class:'digisigns'});
                }

                onRender() {
                    let id=this.config.id;
                    let ob_t='#'+id;
                    $(ob_t).signature({
                        guideline: true,
                        change: function(event, ui) {
                            // console.log('changesig:',$(ob_t).signature('toDataURL'));
                            $(ob_t+' input[name="'+event.target.id+'"]').val($(ob_t).signature('toDataURL'));
                        }
                    } );

                    $(ob_t+' button.digisigns-clear-btn').click(function() {
                        $(ob_t).signature('clear');
                        $(ob_t+' input[name="'+id+'"]').val();
                    });
                    // $(selector).signature('toDataURL')
                }
            }

            // register this control for the following types & text subtypes
            controlClass.register('digiSign', controlDigiSign);
            return controlDigiSign;
        });
