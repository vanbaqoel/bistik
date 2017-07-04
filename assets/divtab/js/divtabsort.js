(function($) {
    
    $.widget( "wsi.divtable", {
        
        objects : {
            headcols    : Object, // header's coloumns object
            tbbody      : Object, // body
            bodyrows    : Object, // body's rows
            filteredrows: Object, // body's cols
            bodycols    : Object, // body's cols
        },

        options: {

        },

        _create: function() {
            this._initObject();
            this._setUpEvent();
        },

        _initObject : function(){
            this.objects.tbhead   = $(".dt-head" ,this.element);
            this.objects.headcols = $(".dt-col" ,this.objects.tbhead);

            this.objects.tbbody   = $(".dt-body" ,this.element);
            
            this.objects.bodyrows = $(".dt-row",this.objects.tbbody);
            this.objects.filteredrows = $(this.objects.bodyrows).filter(":not(.filtered)");
            this.objects.bodycols = $(".dt-col",this.objects.filteredrows);
        },

        _setUpEvent : function(){
            var that = this;
            $.each(that.objects.headcols, function(i,v){
                if( $(this).hasClass("sort") ){
                    this.removeEventListener("click", function(){} , false);

                    this.addEventListener("click", function(){
                        that._sort($(this).data("dt-name"));
                    });
                }
            });

        },

        _filter:function(filters){
            that = this;
            $.each(this.objects.bodyrows,function(ir,vr){
                thisRow = this;
                show = true;

                for (ifil in filters) {
                    child = $(".dt-col[data-dt-name='"+ifil+"']",thisRow);
                    val = typeof child.data("dt-value") === "undefined" ? child.html() : child.data("dt-value");
                    val = val.toLowerCase().trim();
                    if ( filters[ifil].type == "interval") {

                        intervalFind = false;

                        for(iVal in filters[ifil].value){
                            fiVals = filters[ifil].value[iVal];
                            var fiVal = fiVals.trim().split("^^");
                            if(fiVal[0] < fiVal[1] ){
                                if(fiVal[0] <= val && fiVal[1] >= val ) {
                                    intervalFind =  true;
                                    break;
                                } else {
                                    intervalFind = false;
                                }
                            } else {
                                if(fiVal[0] <= val || fiVal[1] >= val ) {
                                    intervalFind =  true;
                                    break;
                                } else {
                                    intervalFind = false;
                                }
                            }
                        }

                        if(!intervalFind){
                            show = false;
                            break;
                        }

                    }else if(filters[ifil].type == "normal"){
                        if(filters[ifil].value.indexOf(val) !== -1 ) {
                            show = true;
                        } else {
                            show = false;
                            break;
                        }
                            
                    }

                }

                if(!show){
                    $(this).hide().addClass("filtered");
                } else {
                    $(this).removeClass("filtered");
                    if(!that.options.groupRow){
                        $(this).show();
                    }
                }

            });

            this.objects.filteredrows = $(this.objects.bodyrows).filter(".filtered");

            if( this.options.groupRow ){
                that._groupRow();
            }
        },

        _sort : function(name,sort){
            if(typeof sort == "undefined") sort = "";
            
            this._initObject();
            that    = this;
            cols    = $(this.objects.bodycols).filter("[data-dt-name ='"+name+"']");
            headcol = $(this.objects.headcols).filter("[data-dt-name ='"+name+"']");

            data = Array();
            $.each(cols, function(i, v){
                var val = $(this).data("dt-value");
                if(typeof val === "undefined") val = $(this).html();
                if(typeof val === "string" ) val = val.toLowerCase();
                
                var obVal = {
                    "value"     : val,
                    "rowElement": $(this).parents(".dt-row")
                }

                data.push(obVal);
            });

            if( $(headcol).hasClass("asc") || sort == "desc" ){
                $(this.objects.headcols).removeClass("asc desc");
                $(headcol).addClass("desc");
                data = this._descSort(data);
            } else {
                $(this.objects.headcols).removeClass("asc desc");
                $(headcol).addClass("asc");
                data = this._ascSort(data);
            }

            $.each(data, function(i,v){
                $(that.objects.tbbody).append(this.rowElement);
            });
        },

        _ascSort : function(data) {
            return data.sort(function(a,b){
                x = a.value;
                y = b.value;
                return x < y ? -1 : x > y ? 1 : 0;
            });
        },

        _descSort : function(data) {
            
            return data.sort(function(a,b){
                x = a.value;
                y = b.value;
                return x > y ? -1 : x < y ? 1 : 0;
            });
        },
        
        reinit : function(){
            this._initObject();
        },

        filter: function(filters){
            this._filter(filters);
        },

        sort: function(sorter,sort){
            this._sort(sorter,sort);
        }

    });

})(jQuery);