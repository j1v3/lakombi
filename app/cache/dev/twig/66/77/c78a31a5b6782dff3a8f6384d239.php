<?php

/* Sf2genConsoleBundle:Console:toolbar_js.html.twig */
class __TwigTemplate_6677c78a31a5b6782dff3a8f6384d239 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sf2gencdt\" style=\"display: none\"></div>
<style type=\"text/css\">
    .sf2gencdt-item {width:200px;height:20px;background-color:#fff;color:#000;cursor:pointer;}
    #sf2gencdt-console pre {margin:0;background-color:transparent;}
</style>
<script type=\"text/javascript\">/*<![CDATA[*/
    var sf2gen = {
        htmlReturn: '<br/>',
        sf2gencdt: null,
        output: null,
        input: null,
        app: null,
        ac: null,
        commands: ";
        // line 14
        echo twig_jsonencode_filter($this->getContext($context, "commands"));
        echo ",
        sendCommands: [],
        selectedHistoryCommand: -1,
        selectedCommand: -1,
        init: function(){
            this.sf2gencdt = document.getElementById('sf2gencdt');
            var xhr = this.getXhr();
            xhr.open('GET', '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_sf2gencdt"), "html", null, true);
        echo "', false);
            xhr.send('');
            this.sf2gencdt.innerHTML = xhr.responseText;
            this.sf2gencdt.style.display = 'block';
            this.output = document.getElementById('sf2gencdt-console-output');
            this.input = document.getElementById('sf2gencdt-console-input');
            this.app = document.getElementById('sf2gencdt-console-app');
            this.ac = document.getElementById('sf2gencdt-console-ac');
            this.resize();
            if ( window.addEventListener ) {
                window.addEventListener( 'resize', function(){ window.sf2gen.resize(); }, false );
            } else if ( window.attachEvent ) {
                window.attachEvent( \"onresize\", function(){ window.sf2gen.resize(); } );
            }
        },
        resize: function(){
            this.output.style.height = (window.innerHeight - 100) + 'px';
            this.output.scrollTop = this.output.scrollHeight;
        },
        append: function(txt){
            this.output.innerHTML += txt;
            this.output.scrollTop = this.output.scrollHeight;
        },
        getXhr: function(){
            if (window.XMLHttpRequest) {
                return new XMLHttpRequest();
            } else {
                return new ActiveXObject('Microsoft.XMLHTTP');
            }
            return false;
        },
        colorize: function(txt){
            return '<span style=\"color:#008000;\">'+txt+'</span>';
        },
        request: function(txt){
            this.lastSentence = null; /*Reinitlast*/
            this.sendCommands.push(txt);
            this.selectedHistoryCommand = -1;
            if(txt == '.')
                txt = 'list';
            var self = this;
            var xhr = this.getXhr();
            var data = 'command=' + txt;
            xhr.open('POST', '";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_sf2gencdt_request"), "html", null, true);
        echo "', true);
            xhr.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");
            xhr.setRequestHeader(\"X-Requested-With\", \"XMLHttpRequest\");
            xhr.uniqueid = (new Date()).getTime();
            self.append('<span id=\"sf2gencdt-'+xhr.uniqueid+'\">\$ ' + self.colorize(txt) + ' : in progress...' + self.htmlReturn + '</span>');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4){
                    if(xhr.status == 200){
                        self.append('\$ ' + self.colorize(txt) + ' :' + self.htmlReturn);
                        self.append(xhr.responseText + self.htmlReturn);
                    }
                    var spanElement = document.getElementById('sf2gencdt-'+xhr.uniqueid);
                    spanElement.parentNode.removeChild(spanElement);
                }
            };
            if(this.app != null)
                data += '&app=' + this.app.value;
            xhr.send(data);
        },
        console: function(e) {
            var keynum = (e.keyCode ? e.keyCode : e.which);
            if(keynum == 27){/*escape*/
                this.hideSelect();
                this.input.value = '';
            }else if((keynum == 13  || keynum == 9) && this.input.value.length > 0){/*enter or tab*/
                if(this.selectedCommand > -1){
                    this.input.value = this.ac.children[this.selectedCommand].innerHTML;
                    this.selectedCommand = -1;
                    this.ac.innerHTML = '';
                }else{
                    this.lastSentence = null; /*Reinitlast*/
                    this.request(this.input.value);
                    this.input.value = '';
                }
                if(e.preventDefault) e.preventDefault();
                return false;
            }else if(keynum == 37 || keynum == 39){
                return;
            }else if(keynum == 38){
                if(this.ac.children.length > 0){
                    this.selectedCommand--;
                    if(this.selectedCommand < 0)
                          this.selectedCommand = this.ac.children.length - 1;
                    this.moveSelect(this.selectedCommand);
                    this.input.value = this.input.value;
                    return false;
                }else{
                    this.hideSelect();
                    this.showHistoryCommands(false);
                }
            }else if(keynum == 40){
                if(this.ac.children.length > 0){
                    this.selectedCommand++;
                    if(this.selectedCommand >= this.ac.children.length)
                          this.selectedCommand = 0;
                    this.moveSelect(this.selectedCommand);
                    return false;
                }else{
                    this.showHistoryCommands(true);
                    this.hideSelect();
                }
            }else{
                this.showSelect(keynum);
            }
        },
        showHistoryCommands: function(next){
            this.lastSentence = this.lastSentence==null ? this.input.value : this.lastSentence;
            if(next) this.showNext();
            else     this.showPrev();
        },
        showPrev: function(){
            this.selectedHistoryCommand--;
            if(this.selectedHistoryCommand < -1) /* value -1 equal to lastSentence */
                this.selectedHistoryCommand=this.sendCommands.length-1;

            if(this.sendCommands[this.selectedHistoryCommand] !== undefined)
                this.input.value = this.sendCommands[this.selectedHistoryCommand];
            else
                this.input.value = this.lastSentence;
        },
        showNext: function(){
            this.selectedHistoryCommand++;
            if(this.selectedHistoryCommand > this.sendCommands.length)
                this.selectedHistoryCommand = 0;
            if(this.sendCommands[this.selectedHistoryCommand] !== undefined)
                this.input.value = this.sendCommands[this.selectedHistoryCommand];
            else
                this.input.value = this.lastSentence;
        },
        moveSelect: function(idx){
            for (var i = 0 ; i < this.ac.children.length ; i++){
                if(i == idx){
                    /*this.ac.children[i].style.color = '#f00';*/
                    this.ac.children[i].style.backgroundColor = '#008000';
                }else{
                    /*this.ac.children[i].style.color = '#fff';*/
                    this.ac.children[i].style.backgroundColor = '#fff';
                }
            }
        },
        showSelect: function(keynum){
            value = this.input.value;
            if(value.length>1){
                this.ac.style.display = 'block';
                acContent = '';
                j = 0;
                for (i in this.commands){
                    var regex = new RegExp('^' + value, 'i');
                    if (regex.test( this.commands[i] )) {
                        acContent += this.buildSelectItem(j, this.commands[i]);
                        j++;
                    }
                }
                this.ac.innerHTML = acContent;
                if(j>0){
                    this.selectedCommand = 0;
                    this.moveSelect(0);
                }else
                    this.selectedCommand = -1;
            }else{
                this.hideSelect();
            }
        },
        hideSelect: function(){
            this.selectedCommand = -1;
            this.ac.style.display = 'none';
        },
        chooseItem: function(item){
            this.input.value = item.innerHTML;
            this.ac.innerHTML = '';
            this.selectedCommand = -1;
            this.input.focus();
        },
        buildSelectItem: function(idx, txt){
            return '<div class=\"sf2gencdt-item\" onmouseover=\"sf2gen.moveSelect('+idx+');\" onclick=\"sf2gen.chooseItem(this);\">'+txt+'</div>';
        }
    };
    sf2gen.init();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "Sf2genConsoleBundle:Console:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
