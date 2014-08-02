/**
 * slider
 *
 * multirole slider plug-in
 *
 * @category    jQuery plugin
 * @license     http://www.opensource.org/licenses/mit-license.html  MIT License
 * @copyright   2010 RaNa design associates, inc.
 * @author      keisuke YAMAMOTO <keisukey@ranadesign.com>
 * @link        http://www.ranadesign.com/
 * @version     3.1
 * @since       Aug 30, 2010
 * @update      Feb 25, 2011
 */

(function($){

    /* for iPhone & iPad ============================= */
    var iphone = /(iPhone)|(iPad)/i.test(navigator.userAgent);


    /* slider ==================================== */
    $.fn.slider = function(param){
        // 初期設定 ------------------------- //

        // 初期値
        var def = {
            loop: true,         // ループさせるかどうか
            time: 20,           // 1px動かすのにかける時間
            speed: 10,           // 早送りや遅送りの比率指定
            direction: "left",  // 送り方向
            reverse: true,      // コントロール方向を逆向きにするかどうか
            auto: true,         // trueで「自動実行」falseで「手動(コントロール)実行｣
            easing: "linear",   // イージングの初期値
            guideSelector: ".slideGuide",   // ガイド用クラス名
            cellSelector: ".slideCell", // セル用クラス名
            ctrlSelector: ".slideCtrl", // コントローラー用クラス名
            ctrlClick: false,   // コントローラ操作用イベントハンドラ(click)
            ctrlHover: true,    // コントローラ操作用イベントハンドラ(hover)
            draggable: false,   // スライドをドラッグで操作するかどうか
            dragCursorOpen: "open.cur", // ドラッグ可能時のカーソルアイコン
            dragCursorClose: "close.cur", // ドラッグ中のカーソルアイコン
            shuttle: false,     // 往復スライドにするかどうか
            once: false,        // 動きを1コマずつ止めるかどうか
            restart: true,      // リスタートするかどうか(clickイベント用)
            restartTime: 3000,  // リスタートまでの待ち時間
            pause: true,        // マウスオーバー時に一時停止するかどうか
            build: true,        // 暗黙のオプション（幅の初期設定）falseで幅設定をしない
            sp: 1               // 基本速度
        };
        def.guide = $(this).find(def.guideSelector);

        return this.each(function(){

            // プライベート用のプロパティの上書き禁止
            if(param){
                delete param.guide;
                delete param.sp;
            }
            
            // パラメータ受け渡し
            $.extend(def, param);

            // draggableかshuttleがtrueの時は関係するオプションをオフにする
            if(def.draggable || def.shuttle) def.loop = def.auto = def.pause = false;

            // 内部処理用プロパティ設定
            def.d = def.direction; // 方向の初期設定を記憶
            def.cell = def.cellSelector;
            def.ctrl = def.ctrlSelector;
            def.curOpen = "url(" + def.dragCursorOpen + "), default";
            def.curClose = "url(" + def.dragCursorClose + "), default";
            def.mousedownX = 0;
            
            // パラメータやセレクターが不正または無効な場合は次へ
            if(!def.guide || def.loop && !def.guide.children(def.cell).length || !def.loop && def.guide.hasClass(def.guideSelector)) return true;
            
            // 幅の初期設定
            if(def.build){
                $(window).resize(init(def)).triggerHandler("resize");
                // init(def);
                // $(window).resize(init(def));
            }
            
            // frame枠の取得
            def.frameBorder = def.guide.offset().left - def.guide.parent().offset().left;
            // cellマージンの取得
            def.margin = def.guide.find(def.cell).eq(0).outerWidth(true) - def.guide.find(def.cell).eq(0).outerWidth();

            // iPhone, iPad用
            def.handlerMousedown = iphone ? "touchstart" : "mousedown";
            def.handlerMousemove = iphone ? "touchmove" : "mousemove";
            def.handlerMouseup = iphone ? "touchend" : "mouseup";



            // 実行設定 ------------------------------- //

            // 自動起動
            if(def.auto) slider(def);


            // オプション設定 ------------------------- //

            // マウスオーバーで一時停止する
            if(def.pause){
                def.guide.hover(
                    function(){ $(this).find(def.cell).stop(true); },
                    function(){ slider(def); }
                );
            }
            
            
            // コントローラ設定 ------------------------- //

            // ホバーイベント
            if(def.ctrlHover){
                // for iPhone & iPad
                if (iphone){
                    def.guide.siblings(def.ctrl)
                        .bind(def.handlerMousedown, function(event){
                            event.preventDefault();
                            def.guide.find(def.cell).stop(true);
                            def.sp = def.speed;
                            def.direction = $(this).hasClass("right") ? "left" : "right";
                            slider(def);
                        }).bind(def.handlerMouseup, function(){
                            def.guide.find(def.cell).stop(true);
                            def.sp = 1;
                            def.direction = def.d;
                            if(def.auto) slider(def);
                        });
                } else {
                    // 早送り・巻き戻し
                    def.guide.siblings(def.ctrl).hover(
                        function(){
                            def.guide.stop(true).find(def.cell).stop(true);
                            def.sp = def.speed;
                            def.direction = $(this).hasClass("right") ? def.reverse ? "left" : "right" : def.reverse ? "right" : "left";
                            slider(def);
                        },
                        function(){
                            def.guide.stop(true).find(def.cell).stop(true);
                            def.sp = 1;
                            def.direction = def.d;
                            if(def.auto) slider(def);
                        }
                    );
                }
            }
            
            // クリックイベント
            if(def.ctrlClick){
                def.guide.siblings(def.ctrl).bind(def.handlerMousedown, function(event){
                    // アニメーションを省略
                    def.guide.find(def.cell).stop(true, true);
                    // 初期動作の中止
                    event.preventDefault();
                    // 方向設定
                        def.direction = $(this).hasClass("right") ? def.reverse ? "left" : "right" : def.reverse ? "right" : "left";
                    // 1クリックで1コマだけ動くようにする
                    def.once = true;
                    slider(def);
                    if (def.restart){
                        setTimeout(function(){
                            def.once = false;
                            slider(def);
                        }, def.restartTime);
                    }
                });
            }

            // ドラッグイベント
            if(def.draggable){
                def.guide.bind(def.handlerMousedown, function(event){
                    event.preventDefault();
                    def.mousedownX = (iphone ? event.originalEvent.touches[0].pageX : event.pageX) - def.guide.position().left;
                    $(this).stop(true).css("cursor", def.curClose);
                    $(document).bind(def.handlerMousemove, dragmove);
                });
                $(document).bind(def.handlerMouseup, function(){
                    def.guide.css("cursor", def.curOpen);
                    $(document).unbind(def.handlerMousemove, dragmove);
                });
            }
            // dragmove設定
            function dragmove(event){
                var frameEnd = def.guide.parent().width() + def.guide.parent().position().left;
                var guideEnd = def.guide.width() + def.guide.position().left;
                var stuff = 100;

                def.guide.css("position", "absolute").css("left", (iphone ? event.originalEvent.touches[0].pageX : event.pageX) - def.mousedownX);

                if(frameEnd - guideEnd > stuff || def.guide.offset().left - def.guide.parent().offset().left > stuff){
                    $(document).unbind(def.handlerMousemove, dragmove).one(def.handlerMouseup, function(){
                        def.guide.animate({
                            left: frameEnd - guideEnd > stuff ? "+=" + (frameEnd - guideEnd) : 0
                        }, {
                            duration: 500,
                            easing: "easeOutQuart"
                        });
                    });
                }
            }

            /* slider 定義 ========================== */
            // ループする場合は「先頭セルを左に移動させたあと、最終セルの後ろに移動させる」を繰り返す。
            function slider(par){
                var cell = par.guide.find(def.cell);
                
                if(par.loop){
                    cell.first = cell.eq(0);
                    cell.last = cell.eq(cell.length - 1);

                    if(par.direction.toLowerCase() === "left"){
                        cell.first.animate({
                            marginLeft: -1 * cell.first.width() - par.margin
                        }, {
                            // 途中で止まっていた場合は残りを調整してanimateし、次以降は再ループさせる。
                            duration: ~~Math.abs(par.time / par.sp * cell.first.width() * 
                                (cell.first.offset().left - par.guide.offset().left < 0 ? 
                                    (cell.first.width() + cell.first.offset().left - par.guide.offset().left) / cell.first.width() : 1
                                )
                            ),
                            easing: par.easing,
                            complete: function(){
                                if(def.loop){
                                    cell.first.appendTo(par.guide).css("marginLeft", 0);
                                    if(!par.once) slider(par);
                                }
                            }
                        });
                    }else if(par.direction.toLowerCase() === "right"){
                        if(cell.first.offset().left - par.guide.offset().left < 0){
                            cell.first.animate({
                                marginLeft: 0
                            },{
                                duration: ~~Math.abs(par.time / par.sp * cell.first.width() * 
                                    (cell.first.offset().left - par.guide.offset().left < 0 ? 
                                        (par.guide.offset().left - cell.first.offset().left) / cell.first.width() : 1
                                    )
                                ),
                                easing: par.easing,
                                complete: function(){ if(!par.once) slider(par); }
                            });
                        }else{
                            cell.last.prependTo(par.guide).css("marginLeft", -1 * cell.last.width() - par.margin);
                            slider(par);
                        }
                    }else{ return false; }
                
                }else{ // ループしない時
                    // 方向の取得
                    var d = par.direction.toLowerCase() === "left" ? -1 : 1;
                    // コントローラの表示
                    var ctrl = par.guide.siblings(par.ctrl);
                    ctrl.show();
                    // スライド設定
                    par.guide.animate({
                        marginLeft: par.guide.width() * d
                    }, {
                        duration: par.time * par.guide.width() / par.sp,
                        easing: par.easing
                    });
                    // 停止設定
                    var gl = par.guide.offset().left;
                    var fl = par.guide.parent().offset().left;
                    var timerId = setInterval(function(){
                        if(d > 0 && par.guide.offset().left > par.guide.parent().offset().left + par.frameBorder){
                            clearInterval(timerId);
                            par.guide.stop(true);
                            ctrl.filter(".left").hide();
                        }
                        if(d < 0 && par.guide.parent().width() + par.guide.parent().offset().left + par.frameBorder + par.margin > par.guide.width() + par.guide.offset().left){
                            clearInterval(timerId);
                            par.guide.stop(true);
                            ctrl.filter(".right").hide();
                        }
                    }, 1);
                }
            }
            
            /* init 定義 ============================= */
            // スライド枠の幅設定
            function init(def){
                var cell = def.guide.find(def.cell);

                // slideCellの数調整。足りない時にコピーして増やす。
                var max = 0;
                var size = 0;
                // セルの合計幅と最大幅を取得する。
                cell.each(function(){
                    max = max > $(this).outerWidth() ? max : $(this).outerWidth();
                    size += $(this).outerWidth(true);
                });
                // ループしない時はセルを増やさない。ガイド幅をセルの合計幅に合わせて終了。
                if(!def.loop){
                    def.guide.width(size);
                    return false;
                }
                // フレーム枠を超えるまでセルを増やす。
                while(size < def.guide.parent().width() + max){
                    cell.clone(true).appendTo(def.guide);
                    size += cell.outerWidth();
                }
                // slideGuideのサイズを合計幅＋最大幅にする。
                def.guide.width(size + max);
            }

        });
    }; // slider end


    /* プラグイン外の追加設定 ==================================== */
    $(function(){
        
        $('#cinemaToggle').click(function(){
            $('#cinemaList').slideToggle(300);
        });

        // slideFrameのoverflowをhiddenに
        $(".slideFrame").css("overflow", "hidden");
        
        // slideCtrl設定
        $(".slideCtrl").show().hover(
                function(){ $(this).css("opacity", 0.5); },
                function(){ $(this).css("opacity", 0.8); }
            );

        // ホバーでセルをグレースケール化
        $(".slideCell").hover(
            function(){ $(this).css("opacity", 0.8); },
            function(){ $(this).css("opacity", 1); }
        );
            
    });
    
}(jQuery));