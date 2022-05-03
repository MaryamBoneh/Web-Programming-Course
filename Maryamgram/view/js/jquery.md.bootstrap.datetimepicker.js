/*!
 * 
 * Bootstrap 4+ Persian Date Time Picker jQuery Plugin
 * https://github.com/Mds92/MD.BootstrapPersianDateTimePicker
 * version : 3.3.7
 * Written By Mohammad Dayyan, Mordad 1397
 * mds.soft@gmail.com - @mdssoft
 * 
 *       
 */
!function (e) {
    var t = {};

    function a(r) {
        if (t[r]) return t[r].exports;
        var n = t[r] = {i: r, l: !1, exports: {}};
        return e[r].call(n.exports, n, n.exports, a), n.l = !0, n.exports
    }

    a.m = e, a.c = t, a.d = function (e, t, r) {
        a.o(e, t) || Object.defineProperty(e, t, {enumerable: !0, get: r})
    }, a.r = function (e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(e, "__esModule", {value: !0})
    }, a.t = function (e, t) {
        if (1 & t && (e = a(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var r = Object.create(null);
        if (a.r(r), Object.defineProperty(r, "default", {
            enumerable: !0,
            value: e
        }), 2 & t && "string" != typeof e) for (var n in e) a.d(r, n, function (t) {
            return e[t]
        }.bind(null, n));
        return r
    }, a.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return a.d(t, "a", t), t
    }, a.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, a.p = "", a(a.s = 0)
}([function (e, t) {
    !function (e) {
        function t(e, t, a) {
            return function (e) {
                var t, a, r, l = i(e).gy, c = l - 621, m = n(c), u = o(l, 3, m.march);
                if ((r = e - u) >= 0) {
                    if (r <= 185) return a = 1 + s(r, 31), t = d(r, 31) + 1, {jy: c, jm: a, jd: t};
                    r -= 186
                } else c -= 1, r += 179, 1 === m.leap && (r += 1);
                return a = 7 + s(r, 30), t = d(r, 30) + 1, {jy: c, jm: a, jd: t}
            }(o(e, t, a))
        }

        function a(e, t, a) {
            return i(function (e, t, a) {
                var r = n(e);
                return o(r.gy, 3, r.march) + 31 * (t - 1) - s(t, 7) * (t - 7) + a - 1
            }(e, t, a))
        }

        function r(e) {
            return 0 === n(e).leap
        }

        function n(e) {
            var t, a, r, n,
                o = [-61, 9, 38, 199, 426, 686, 756, 818, 1111, 1181, 1210, 1635, 2060, 2097, 2192, 2262, 2324, 2394, 2456, 3178],
                i = o.length, l = e + 621, c = -14, m = o[0], u = 1;
            if (e < m || e >= o[i - 1]) throw new Error("Invalid Jalaali year " + e);
            for (n = 1; n < i && (u = (t = o[n]) - m, !(e < t)); n += 1) c = c + 8 * s(u, 33) + s(d(u, 33), 4), m = t;
            c = c + 8 * s(r = e - m, 33) + s(d(r, 33) + 3, 4), 4 === d(u, 33) && u - r == 4 && (c += 1);
            var g = 20 + c - (s(l, 4) - s(3 * (s(l, 100) + 1), 4) - 150);
            return u - r < 6 && (r = r - u + 33 * s(u + 4, 33)), -1 === (a = d(d(r + 1, 33) - 1, 4)) && (a = 4), {
                leap: a,
                gy: l,
                march: g
            }
        }

        function o(e, t, a) {
            var r = s(1461 * (e + s(t - 8, 6) + 100100), 4) + s(153 * d(t + 9, 12) + 2, 5) + a - 34840408;
            return r = r - s(3 * s(e + 100100 + s(t - 8, 6), 100), 4) + 752
        }

        function i(e) {
            var t,
                a = 5 * s(d(t = (t = 4 * e + 139361631) + 4 * s(3 * s(4 * e + 183187720, 146097), 4) - 3908, 1461), 4) + 308,
                r = s(d(a, 153), 5) + 1, n = d(s(a, 153), 12) + 1;
            return {gy: s(t, 1461) - 100100 + s(8 - n, 6), gm: n, gd: r}
        }

        function s(e, t) {
            return ~~(e / t)
        }

        function d(e, t) {
            return e - ~~(e / t) * t
        }

        var l = "[data-mdpersiandatetimepicker]", c = "data-mdpersiandatetimepicker-group",
            m = "[data-mdpersiandatetimepicker-popover]", u = "[data-mdpersiandatetimepicker-container]",
            g = "MdPersianDateTimePicker", h = !1,
            b = '\n<div class="mds-bootstrap-persian-datetime-picker-container {{rtlCssClass}}" data-mdpersiandatetimepicker-container>\n    <div class="select-year-box w-0">\n        <div class="container-fluid">\n            <div class="row">\n                {{yearsToSelectHtml}}\n            </div>\n        </div>\n    </div>\n    <table class="table table-sm text-center p-0 m-0">\n        <thead>\n            <tr {{selectedDateStringAttribute}}>\n                <th colspan="100" data-selecteddatestring>{{selectedDateString}}</th>\n            </tr>            \n        </thead>\n        <tbody>\n            <tr>\n                {{monthsTdHtml}}\n            </tr>\n        </tbody>\n        <tfoot>\n            <tr {{timePickerAttribute}}>\n                <td colspan="100" class="border-0">\n                    <table class="table table-sm table-borderless">\n                        <tbody>\n                            <tr>\n                                <td>\n                                    <input type="text" title="{{hourText}}" value="{{hour}}" maxlength="2" data-clock="hour" />\n                                </td>\n                                <td>:</td>\n                                <td>\n                                    <input type="text" title="{{minuteText}}" value="{{minute}}" maxlength="2" data-clock="minute" />\n                                </td>\n                                <td>:</td>\n                                <td>\n                                    <input type="text" title="{{secondText}}" value="{{second}}" maxlength="2" data-clock="second" />\n                                </td>\n                            </tr>\n                        </tbody>\n                    </table>\n                </td>\n            </tr>\n            <tr>\n                <td colspan="100">\n                    <button type="button" class="btn btn-light" title="{{goTodayText}}" data-go-today>{{todayDateString}}</button>\n                </td>\n            </tr>\n        </tfoot>\n    </table>\n</div>',
            p = '\n<td class="border-0" style="{{monthTdStyle}}" {{monthTdAttribute}} data-td-month>\n\t<table class="table table-sm table-striped table-borderless">\n\t\t<thead>\n\t\t\t<tr {{monthNameAttribute}}>\n\t\t\t\t<th colspan="100" class="border-0">\n\t\t\t\t\t<table class="table table-sm table-borderless">\n\t\t\t\t\t\t<thead>\n\t\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t\t\t<th>\n\t\t\t\t\t\t\t\t\t<button type="button" class="btn btn-light"> {{currentMonthInfo}} </button>\n\t\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t</thead>\n\t\t\t\t\t</table>\n\t\t\t\t</th>\n\t\t\t</tr>\n\t\t\t<tr {{theadSelectDateButtonTrAttribute}}>\n                <td colspan="100" class="border-0">\n                    <table class="table table-sm table-borderless">\n                        <tr>\n                            <th>\n                                <button type="button" class="btn btn-light btn-sm" title="{{previousYearText}}" data-changedatebutton data-number="{{previousYearButtonDateNumber}}" {{previousYearButtonDisabledAttribute}}> &lt;&lt; </button>\n                            </th>\n                            <th>\n                                <button type="button" class="btn btn-light btn-sm" title="{{previousMonthText}}" data-changedatebutton data-number="{{previousMonthButtonDateNumber}}" {{previousMonthButtonDisabledAttribute}}> &lt; </button>\n                            </th>\n                            <th style="width: 120px;">\n                                <div class="dropdown">\n                                    <button type="button" class="btn btn-light btn-sm dropdown-toggle" id="mdsBootstrapPersianDatetimePickerMonthSelectorButon"\n                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n                                        {{selectedMonthName}}\n                                    </button>\n                                    <div class="dropdown-menu" aria-labelledby="mdsBootstrapPersianDatetimePickerMonthSelectorButon">\n                                        <a class="dropdown-item {{selectMonth1ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth1DateNumber}}">{{monthName1}}</a>\n                                        <a class="dropdown-item {{selectMonth2ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth2DateNumber}}">{{monthName2}}</a>\n                                        <a class="dropdown-item {{selectMonth3ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth3DateNumber}}">{{monthName3}}</a>\n                                        <div class="dropdown-divider"></div>\n                                        <a class="dropdown-item {{selectMonth4ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth4DateNumber}}">{{monthName4}}</a>\n                                        <a class="dropdown-item {{selectMonth5ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth5DateNumber}}">{{monthName5}}</a>\n                                        <a class="dropdown-item {{selectMonth6ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth6DateNumber}}">{{monthName6}}</a>\n                                        <div class="dropdown-divider"></div>\n                                        <a class="dropdown-item {{selectMonth7ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth7DateNumber}}">{{monthName7}}</a>\n                                        <a class="dropdown-item {{selectMonth8ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth8DateNumber}}">{{monthName8}}</a>\n                                        <a class="dropdown-item {{selectMonth9ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth9DateNumber}}">{{monthName9}}</a>\n                                        <div class="dropdown-divider"></div>\n                                        <a class="dropdown-item {{selectMonth10ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth10DateNumber}}">{{monthName10}}</a>\n                                        <a class="dropdown-item {{selectMonth11ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth11DateNumber}}">{{monthName11}}</a>\n                                        <a class="dropdown-item {{selectMonth12ButtonCssClass}}" data-changedatebutton data-number="{{dropDownMenuMonth12DateNumber}}">{{monthName12}}</a>\n                                    </div>\n                                </div>\n                            </th>\n                            <th style="width: 50px;">\n                                <button type="button" class="btn btn-light btn-sm" select-year-button {{selectYearButtonDisabledAttribute}}>{{selectedYear}}</button>\n                            </th>\n                            <th>\n                                <button type="button" class="btn btn-light btn-sm" title="{{nextMonthText}}" data-changedatebutton data-number="{{nextMonthButtonDateNumber}}" {{nextMonthButtonDisabledAttribute}}> &gt; </button>\n                            </th>\n                            <th>\n                                <button type="button" class="btn btn-light btn-sm" title="{{nextYearText}}" data-changedatebutton data-number="{{nextYearButtonDateNumber}}" {{nextYearButtonDisabledAttribute}}> &gt;&gt; </button>\n                            </th>\n                        </tr>\n                    </table>\n                </td>\n\t\t\t</tr>\n\t\t</thead>\n\t\t<tbody class="days">\n            <tr>\n                <td class="{{weekDayShortName1CssClass}}">{{weekDayShortName1}}</td>\n                <td>{{weekDayShortName2}}</td>\n                <td>{{weekDayShortName3}}</td>\n                <td>{{weekDayShortName4}}</td>\n                <td>{{weekDayShortName5}}</td>\n                <td>{{weekDayShortName6}}</td>\n                <td class="{{weekDayShortName7CssClass}}">{{weekDayShortName7}}</td>\n            </tr>\n        {{daysHtml}}\n\t\t</tbody>\n\t</table>\n</td>\n    ';
        triggerChangeCalling = !1;
        var D = "سال قبل", f = "ماه قبل", y = "سال بعد", v = "ماه بعد", M = "ساعت", S = "دقیقه", C = "ثانیه",
            w = "برو به امروز", N = "Previous Year", T = "Previous Month", B = "Next Year", x = "Next Month",
            k = "Go Today", G = "Hour", P = "Minute", A = "Second", F = {am: 0, pm: 1, none: 2},
            E = ["ش", "ی", "د", "س", "چ", "پ", "ج"], Y = ["SU", "MO", "TU", "WE", "TH", "FR", "SA"],
            O = ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"],
            H = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            I = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            j = ["یک شنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه", "شنبه"];

        function $(t) {
            var a = t.parents(l + ":first");
            return a.length <= 0 && (a = t.parents(m + ":first"), a = e('[aria-describedby="' + a.attr("id") + '"]')), a
        }

        function L(e) {
            return $(e).data(g)
        }

        function W(e) {
            return e.data(g)
        }

        function R(e, t) {
            return $(e).data(g, t)
        }

        function _(e, t) {
            return e.data(g, t)
        }

        function J(e, t) {
            var a = Se(t);
            (t.inLine ? e.parents(l + ":first") : e.parents('[data-name="mds-datetimepicker-popoverbody"]:first')).html(a)
        }

        function U(e) {
            return void 0 == e.selectedDate ? "" : e.rangeSelector && void 0 != e.rangeSelectorStartDate && void 0 != e.rangeSelectorEndDate ? fe(e.isGregorian ? ue(e.rangeSelectorStartDate) : ge(e.rangeSelectorStartDate), e.textFormat, e.isGregorian, e.englishNumber) + " - " + fe(e.isGregorian ? ue(e.rangeSelectorEndDate) : ge(e.rangeSelectorEndDate), e.textFormat, e.isGregorian, e.englishNumber) : fe(e.isGregorian ? ue(e.selectedDate) : ge(e.selectedDate), e.textFormat, e.isGregorian, e.englishNumber)
        }

        function q(e) {
            return void 0 == e.selectedDate ? "" : e.rangeSelector && void 0 != e.rangeSelectorStartDate && void 0 != e.rangeSelectorEndDate ? fe(ue(e.rangeSelectorStartDate), e.dateFormat, e.isGregorian, !0) + " - " + fe(ue(e.rangeSelectorEndDate), e.dateFormat, e.isGregorian, !0) : fe(ue(e.selectedDate), e.dateFormat, e.isGregorian, !0)
        }

        function Q(t) {
            var a = e(t.targetTextSelector);
            if (a.length > 0) switch (a[0].tagName.toLowerCase()) {
                case"input":
                    a.val(U(t)), triggerChangeCalling = !0, a.trigger("change");
                    break;
                default:
                    a.text(U(t)), triggerChangeCalling = !0, a.trigger("change")
            }
            var r = e(t.targetDateSelector);
            if (r.length > 0) switch (r[0].tagName.toLowerCase()) {
                case"input":
                    r.val(q(t)), triggerChangeCalling = !0, r.trigger("change");
                    break;
                default:
                    r.text(q(t)), triggerChangeCalling = !0, r.trigger("change")
            }
        }

        function z(e) {
            return !isNaN(parseFloat(e)) && isFinite(e)
        }

        function K(e) {
            if (!e) return "";
            var t = e.toString().trim();
            return t ? t = (t = (t = (t = (t = (t = (t = (t = (t = (t = t.replace(/0/gim, "۰")).replace(/1/gim, "۱")).replace(/2/gim, "۲")).replace(/3/gim, "۳")).replace(/4/gim, "۴")).replace(/5/gim, "۵")).replace(/6/gim, "۶")).replace(/7/gim, "۷")).replace(/8/gim, "۸")).replace(/9/gim, "۹") : ""
        }

        function V(e) {
            if (!e) return "";
            var t = e.toString().trim();
            return t ? t = (t = (t = (t = (t = (t = (t = (t = (t = (t = t.replace(/۰/gim, "0")).replace(/۱/gim, "1")).replace(/۲/gim, "2")).replace(/۳/gim, "3")).replace(/۴/gim, "4")).replace(/۵/gim, "5")).replace(/۶/gim, "6")).replace(/۷/gim, "7")).replace(/۸/gim, "8")).replace(/۹/gim, "9") : ""
        }

        function X(e, t) {
            return t ? H[e] : O[e]
        }

        function Z(t, a, r) {
            var n = e.extend({}, t);
            return n.day = 1, n.month += a, r ? ue(ce(n)) : (n.month <= 0 && (n.month = 12, n.year--), n.month > 12 && (n.year++, n.month = 1), n)
        }

        function ee(e, t, a) {
            return a ? ce(Z(ue(e), t, a)) : le(Z(ge(e), t, a))
        }

        function te(e, t) {
            return t ? I[e] : j[e]
        }

        function ae(e, t) {
            return t ? Y[e] : E[e]
        }

        function re(e, t) {
            return e > 12 ? t ? "PM" : "ب.ظ" : t ? "AM" : "ق.ظ"
        }

        function ne(e) {
            e && e.popover("hide")
        }

        function oe(e) {
            return Number(De(e.year) + De(e.month) + De(e.day))
        }

        function ie(e, t, a) {
            return Number(De(e) + De(t) + De(a))
        }

        function se(e) {
            return oe(ue(e))
        }

        function de(e, t, r, n, o, i) {
            z(n) || (n = 0), z(o) || (o = 0), z(i) || (i = 0);
            var s = a(e, t, r);
            return new Date(s.gy, s.gm - 1, s.gd, n, o, i)
        }

        function le(e) {
            e.hour || (e.hour = 0), e.minute || (e.minute = 0), e.second || (e.second = 0);
            var t = a(e.year, e.month, e.day);
            return new Date(t.gy, t.gm - 1, t.gd, e.hour, e.minute, e.second)
        }

        function ce(e) {
            return new Date(e.year, e.month - 1, e.day, e.hour, e.minute, e.second)
        }

        function me(e, t, a) {
            var r = function (e) {
                return {
                    year: Math.floor(e / 1e4),
                    month: Math.floor(e / 100) % 100,
                    day: e % 100,
                    hour: 0,
                    minute: 0,
                    second: 0
                }
            }(e);
            if (a.isGregorian) t = new Date(r.year, r.month - 1, r.day); else {
                var n = ge(t);
                n.year = r.year, n.month = r.month, n.day = r.day, t = le(n)
            }
            return t
        }

        function ue(e) {
            return {
                year: e.getFullYear(),
                month: e.getMonth() + 1,
                day: e.getDate(),
                hour: e.getHours(),
                minute: e.getMinutes(),
                second: e.getSeconds(),
                dayOfWeek: e.getDay()
            }
        }

        function ge(e) {
            var a = t(e.getFullYear(), e.getMonth() + 1, e.getDate());
            return {
                year: a.jy,
                month: a.jm,
                day: a.jd,
                hour: e.getHours(),
                minute: e.getMinutes(),
                second: e.getSeconds(),
                dayOfWeek: e.getDay()
            }
        }

        function he(e, t) {
            var a = 31;
            return t > 6 && t < 12 ? a = 30 : 12 == t && (a = function (e) {
                return r(e)
            }(e) ? 30 : 29), a
        }

        function be(e, t) {
            return new Date(e, t + 1, 0).getDate()
        }

        function pe(e) {
            return new Date(e.getTime())
        }

        function De(e, t) {
            if (void 0 == e || "" == e) return "00";
            void 0 != t && "" != t || (t = "00");
            var a = String(t).length - String(e).length + 1;
            return a > 0 ? new Array(a).join("0") + e : e
        }

        function fe(e, t, a, r) {
            return a && (r = !0), t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = t.replace(/yyyy/gm, e.year)).replace(/yy/gm, e.year % 100)).replace(/MMMM/gm, X(e.month, a))).replace(/MM/gm, De(e.month))).replace(/M/gm, e.month)).replace(/dddd/gm, te(e.day, a))).replace(/dd/gm, De(e.day))).replace(/d/gm, e.day)).replace(/HH/gm, De(e.hour))).replace(/H/gm, e.hour)).replace(/hh/gm, De(function (e) {
                return e > 12 ? e - 12 : e
            }(e.hour)))).replace(/h/gm, De(e.hour))).replace(/mm/gm, De(e.minute))).replace(/m/gm, e.minute)).replace(/ss/gm, De(e.second))).replace(/s/gm, e.second)).replace(/fff/gm, De(e.millisecond, "000"))).replace(/ff/gm, De(e.millisecond / 10))).replace(/f/gm, e.millisecond / 100)).replace(/tt/gm, re(e.hour, a))).replace(/t/gm, re(e.hour, a)[0]), r || (t = K(t)), t
        }

        function ye(e, t) {
            var a = pe(e);
            if (t) {
                var r = new Date(a.getFullYear(), a.getMonth() - 1, 1), n = be(r.getFullYear(), r.getMonth());
                return new Date(r.getFullYear(), r.getMonth(), n)
            }
            var o = ge(a);
            return o.month += -1, o.month <= 0 ? (o.month = 12, o.year--) : o.month > 12 && (o.year++, o.month = 1), de(o.year, o.month, he(o.year, o.month))
        }

        function ve(e, t) {
            var a = pe(e);
            if (t) {
                var r = new Date(a.getFullYear(), a.getMonth() + 1, 1);
                return new Date(r.getFullYear(), r.getMonth(), 1)
            }
            var n = ge(a);
            return n.month += 1, n.month <= 0 && (n.month = 12, n.year--), n.month > 12 && (n.year++, n.month = 1), de(n.year, n.month, 1)
        }

        function Me(e, t) {
            if (e) return t.isGregorian ? function (e) {
                if (!(e = V(e))) {
                    var t = new Date;
                    return t.setHours(0), t.setMinutes(0), t.setSeconds(0), t.setMilliseconds(0), t
                }
                return new Date(e)
            }(e) : function (e, t) {
                t || (t = "/|-"), t = new RegExp(t, "img"), e = V(e);
                var a = 0, r = 0, n = 0, o = 0, i = 0, s = 0, d = 0, l = F.none, c = t.test(e);
                if ((e = "-" + (e = (e = (e = (e = (e = (e = e.replace(/&nbsp;/gim, " ")).replace(/\s+/gim, "-")).replace(/\\/gim, "-")).replace(/ك/gim, "ک")).replace(/ي/gim, "ی")).replace(t, "-")) + "-").indexOf("ق.ظ") > -1 ? l = l.AM : e.indexOf("ب.ظ") > -1 && (l = l.PM), e.indexOf(":") > -1) {
                    o = (e = e.replace(/-*:-*/gim, ":")).match(/-\d{1,2}(?=:)/gim)[0].replace(/\D+/, "");
                    var m = e.match(/:\d{1,2}(?=:?)/gim);
                    i = m[0].replace(/\D+/, ""), void 0 != m[1] && (s = m[1].replace(/\D+/, "")), void 0 != m[2] && (d = m[2].replace(/\D+/, ""))
                }
                if (c) {
                    var u = e.match(/-\d{1,2}(?=-\d{1,2}[^:]|-)/gim);
                    a = u[0].replace(/\D+/, ""), n = u[1].replace(/\D+/, ""), r = e.match(/-\d{2,4}(?=-\d{1,2}[^:])/gim)[0].replace(/\D+/, "")
                } else {
                    for (var g = 1; g < 12; g++) {
                        var h = X(g - 1, !1);
                        if (!(e.indexOf(h) > -1)) {
                            a = g;
                            break
                        }
                    }
                    var b = e.match(/-\d{1,2}(?=-)/gim);
                    null != b && (n = b[0].replace(/\D+/, ""), e = e.replace(new RegExp("-" + n + "(?=-)", "img"), "-"));
                    var p = e.match(/-\d{4}(?=-)/gim);
                    null != p ? r = p[0].replace(/\D+/, "") : null != (p = e.match(/-\d{2,4}(?=-)/gim)) && (r = p[0].replace(/\D+/, ""))
                }
                var D = Number(r), f = Number(a), y = Number(n), v = Number(o), M = Number(i), S = Number(s);
                switch (Number(d), D <= 0 && (D = persianDateTime[0]), f <= 0 && (f = persianDateTime[1]), y <= 0 && (y = persianDateTime[2]), l) {
                    case l.PM:
                        v < 12 && (v += 12);
                        break;
                    case l.AM:
                    case l.None:
                }
                return de(D, f, y, v, M, S)
            }(e)
        }

        function Se(t) {
            var a = pe(t.selectedDateToShow), r = b;
            r = (r = (r = (r = (r = (r = (r = r.replace(/{{rtlCssClass}}/gim, t.isGregorian ? "" : "rtl")).replace(/{{selectedDateStringAttribute}}/gim, t.inLine ? "" : "hidden")).replace(/{{hourText}}/gim, t.isGregorian ? G : M)).replace(/{{minuteText}}/gim, t.isGregorian ? P : S)).replace(/{{secondText}}/gim, t.isGregorian ? A : C)).replace(/{{goTodayText}}/gim, t.isGregorian ? k : w)).replace(/{{timePickerAttribute}}/gim, t.enableTimePicker ? "" : "hidden");
            var n, o, i = "", s = "", d = "", l = {},
                m = t.rangeSelector && t.rangeSelectorStartDate ? pe(t.rangeSelectorStartDate) : void 0,
                u = t.rangeSelector && t.rangeSelectorEndDate ? pe(t.rangeSelectorEndDate) : void 0, g = {}, h = {},
                p = {}, D = {};
            if (t.isGregorian ? (D = ue(a), l = ue(new Date), g = void 0 != m ? ue(m) : void 0, h = void 0 != u ? ue(u) : void 0, p = void 0 == t.selectedDate ? l : ue(t.selectedDate), n = t.disableBeforeDate ? ue(t.disableBeforeDate) : void 0, o = t.disableAfterDate ? ue(t.disableAfterDate) : void 0) : (D = ge(a), l = ge(new Date), g = void 0 != m ? ge(m) : void 0, h = void 0 != u ? ge(u) : void 0, p = void 0 == t.selectedDate ? l : ge(t.selectedDate), n = t.disableBeforeDate ? ge(t.disableBeforeDate) : void 0, o = t.disableAfterDate ? ge(t.disableAfterDate) : void 0), (t.fromDate || t.toDate) && t.groupId) {
                var f = e("[" + c + '="' + t.groupId + '"][data-toDate]'),
                    y = e("[" + c + '="' + t.groupId + '"][data-fromDate]');
                if (t.fromDate) {
                    var v = W(f).selectedDate;
                    o = v ? t.isGregorian ? ue(v) : ge(v) : void 0
                } else if (t.toDate) {
                    var N = W(y).selectedDate;
                    n = N ? t.isGregorian ? ue(N) : ge(N) : void 0
                }
            }
            s = t.rangeSelector && void 0 != g && void 0 != h ? `${te(g.dayOfWeek, t.isGregorian)}، ${g.day} ${X(g.month - 1, t.isGregorian)} ${g.year} - \n                ${te(h.dayOfWeek, t.isGregorian)}، ${h.day} ${X(h.month - 1, t.isGregorian)} ${h.year}` : `${te(p.dayOfWeek, t.isGregorian)}، ${p.day} ${X(p.month - 1, t.isGregorian)} ${p.year}`, d = `${t.isGregorian ? "Today," : "امروز،"} ${l.day} ${X(l.month - 1, t.isGregorian)} ${l.year}`, t.englishNumber || (s = K(s), d = K(d));
            for (var T = l.year - t.yearOffset; T < l.year + t.yearOffset; T++) if (!(t.disableBeforeToday && T < l.year || t.disableAfterToday && T > l.year || void 0 != n && void 0 != n.year && T < n.year || void 0 != o && void 0 != o.year && T > o.year)) {
                var B = ie(T, D.month, he(T, D.month)), x = "", F = t.englishNumber ? T.toString() : K(T),
                    E = ie(T, D.month, 1);
                void 0 != n && void 0 != n.year && B < oe(n) && (x = "disabled"), void 0 != o && void 0 != o.year && B < oe(o) && (x = "disabled"), t.disableBeforeToday && B < oe(l) && (x = "disabled"), t.disableAfterToday && B > oe(l) && (x = "disabled"), i += `\n<div class="col-3 text-center" ${D.year == T ? "selected-year" : ""}>\n    <button class="btn btn-sm btn-light" type="button" data-changedatebutton data-number="${E}" ${x}>${F}</button>\n</div>`
            }
            void 0 != o && o.year <= D.year && o.month < D.month && (a = t.isGregorian ? new Date(o.year, o.month - 1, 1) : de(o.year, o.month, o.day)), void 0 != n && n.year >= D.year && n.month > D.month && (a = t.isGregorian ? new Date(n.year, n.month - 1, 1) : de(n.year, n.month, n.day));
            for (var Y = "", O = t.monthsToShow[1] <= 0 ? 0 : t.monthsToShow[1], H = t.monthsToShow[0] <= 0 ? 0 : t.monthsToShow[0], I = H *= -1; I < 0; I++) t.selectedDateToShow = ee(pe(a), I), Y += Ce(t, !1, !0);
            t.selectedDateToShow = pe(a), Y += Ce(t, !1, !1);
            for (var j = 1; j <= O; j++) t.selectedDateToShow = ee(pe(a), j), Y += Ce(t, !0, !1);
            var $ = Math.abs(H) + 1 + O, L = $ > 1 ? "width: " + (100 / $).toString() + "%;" : "";
            return Y = Y.replace(/{{monthTdStyle}}/gim, L), r = (r = (r = (r = (r = (r = (r = r.replace(/{{yearsToSelectHtml}}/gim, i)).replace(/{{selectedDateString}}/gim, s)).replace(/{{todayDateString}}/gim, d)).replace(/{{hour}}/gim, D.hour)).replace(/{{minute}}/gim, D.minute)).replace(/{{second}}/gim, D.second)).replace(/{{monthsTdHtml}}/gim, Y)
        }

        function Ce(t, r, n) {
            var o = pe(t.selectedDateToShow), i = pe(o), s = void 0 != t.selectedDate ? pe(t.selectedDate) : void 0,
                d = r || n, l = p;
            l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = l.replace(/{{monthTdAttribute}}/gim, r ? "data-next-month" : n ? "data-prev-month" : "")).replace(/{{monthNameAttribute}}/gim, d ? "" : "hidden")).replace(/{{theadSelectDateButtonTrAttribute}}/gim, t.inLine || !d ? "" : "hidden")).replace(/{{weekDayShortName1CssClass}}/gim, t.isGregorian ? "text-danger" : "")).replace(/{{weekDayShortName7CssClass}}/gim, t.isGregorian ? "" : "text-danger")).replace(/{{previousYearText}}/gim, t.isGregorian ? N : D)).replace(/{{previousMonthText}}/gim, t.isGregorian ? T : f)).replace(/{{nextMonthText}}/gim, t.isGregorian ? x : v)).replace(/{{nextYearText}}/gim, t.isGregorian ? B : y)).replace(/{{monthName1}}/gim, X(0, t.isGregorian))).replace(/{{monthName2}}/gim, X(1, t.isGregorian))).replace(/{{monthName3}}/gim, X(2, t.isGregorian))).replace(/{{monthName4}}/gim, X(3, t.isGregorian))).replace(/{{monthName5}}/gim, X(4, t.isGregorian))).replace(/{{monthName6}}/gim, X(5, t.isGregorian))).replace(/{{monthName7}}/gim, X(6, t.isGregorian))).replace(/{{monthName8}}/gim, X(7, t.isGregorian))).replace(/{{monthName9}}/gim, X(8, t.isGregorian))).replace(/{{monthName10}}/gim, X(9, t.isGregorian))).replace(/{{monthName11}}/gim, X(10, t.isGregorian))).replace(/{{monthName12}}/gim, X(11, t.isGregorian))).replace(/{{weekDayShortName1}}/gim, ae(0, t.isGregorian))).replace(/{{weekDayShortName2}}/gim, ae(1, t.isGregorian))).replace(/{{weekDayShortName3}}/gim, ae(2, t.isGregorian))).replace(/{{weekDayShortName4}}/gim, ae(3, t.isGregorian))).replace(/{{weekDayShortName5}}/gim, ae(4, t.isGregorian))).replace(/{{weekDayShortName6}}/gim, ae(5, t.isGregorian))).replace(/{{weekDayShortName7}}/gim, ae(6, t.isGregorian));
            var m, u, g, h, b, M, S, C = 0, w = 0, k = 0, G = 0, P = 0, A = {}, F = {}, E = e("<tr />"),
                Y = e("<td />"), O = "", H = 0, I = "", j = 0, $ = 0, L = 0, R = 0,
                _ = t.rangeSelector && void 0 != t.rangeSelectorStartDate ? pe(t.rangeSelectorStartDate) : void 0,
                J = t.rangeSelector && void 0 != t.rangeSelectorEndDate ? pe(t.rangeSelectorEndDate) : void 0, U = 0,
                q = 0, Q = "0", V = "", ee = {
                    month1DateNumber: 0,
                    month2DateNumber: 0,
                    month3DateNumber: 0,
                    month4DateNumber: 0,
                    month5DateNumber: 0,
                    month6DateNumber: 0,
                    month7DateNumber: 0,
                    month8DateNumber: 0,
                    month9DateNumber: 0,
                    month10DateNumber: 0,
                    month11DateNumber: 0,
                    month12DateNumber: 0,
                    selectMonth1ButtonCssClass: "",
                    selectMonth2ButtonCssClass: "",
                    selectMonth3ButtonCssClass: "",
                    selectMonth4ButtonCssClass: "",
                    selectMonth5ButtonCssClass: "",
                    selectMonth6ButtonCssClass: "",
                    selectMonth7ButtonCssClass: "",
                    selectMonth8ButtonCssClass: "",
                    selectMonth9ButtonCssClass: "",
                    selectMonth10ButtonCssClass: "",
                    selectMonth11ButtonCssClass: "",
                    selectMonth12ButtonCssClass: ""
                }, re = [], ne = [], de = {}, le = {}, ce = "", me = "", fe = "", Me = "", Se = "";
            if (t.isGregorian) {
                for (F = ue(i), A = ue(new Date), de = t.disableBeforeDate ? ue(t.disableBeforeDate) : void 0, le = t.disableAfterDate ? ue(t.disableAfterDate) : void 0, m = new Date(F.year, F.month - 1, 1).getDay(), P = s ? oe(ue(s)) : 0, b = be(F.year, F.month - 1), numberOfDaysInPreviousMonth = be(F.year, F.month - 2), j = oe(ue(ye(i, !0))), $ = oe(ue(ve(i, !0))), i = pe(o), L = oe(ue(new Date(i.setFullYear(i.getFullYear() - 1)))), i = pe(o), R = oe(ue(new Date(i.setFullYear(i.getFullYear() + 1)))), i = pe(o), U = t.rangeSelector && _ ? se(_) : 0, q = t.rangeSelector && J ? se(J) : 0, C = 1; C <= 12; C++) ee["month" + C.toString() + "DateNumber"] = oe(ue(new Date(i.setMonth(C - 1)))), i = pe(o);
                for (C = 0; C < t.holiDays.length; C++) re.push(oe(ue(t.holiDays[C])));
                for (C = 0; C < t.disabledDates.length; C++) ne.push(oe(ue(t.disabledDates[C])))
            } else {
                for (F = ge(i), A = ge(new Date), de = t.disableBeforeDate ? ge(t.disableBeforeDate) : void 0, le = t.disableAfterDate ? ge(t.disableAfterDate) : void 0, m = function (e, t, r, n, o, i) {
                    z(n) || (n = 0), z(o) || (o = 0), z(i) || (i = 0);
                    var s = a(e, t, r);
                    return ge(new Date(s.gy, s.gm - 1, s.gd, n, o, i))
                }(F.year, F.month, 1, 0, 0, 0).dayOfWeek, P = s ? oe(ge(s)) : 0, b = he(F.year, F.month), numberOfDaysInPreviousMonth = he(F.year - 1, F.month - 1), j = oe(ge(ye(i, !1))), $ = oe(ge(ve(i = pe(o), !1))), i = pe(o), L = ie(F.year - 1, F.month, F.day), R = ie(F.year + 1, F.month, F.day), i = pe(o), U = t.rangeSelector && _ ? oe(ge(_)) : 0, q = t.rangeSelector && J ? oe(ge(J)) : 0, C = 1; C <= 12; C++) ee["month" + C.toString() + "DateNumber"] = ie(F.year, C, he(F.year, C)), i = pe(o);
                for (C = 0; C < t.holiDays.length; C++) re.push(oe(ge(t.holiDays[C])));
                for (C = 0; C < t.disabledDates.length; C++) ne.push(oe(ge(t.disabledDates[C])))
            }
            if ((t.fromDate || t.toDate) && t.groupId) {
                var Ce = e("[" + c + '="' + t.groupId + '"][data-toDate]'),
                    we = e("[" + c + '="' + t.groupId + '"][data-fromDate]');
                if (t.fromDate) {
                    var Ne = W(Ce).selectedDate;
                    le = Ne ? t.isGregorian ? ue(Ne) : ge(Ne) : void 0
                } else if (t.toDate) {
                    var Te = W(we).selectedDate;
                    de = Te ? t.isGregorian ? ue(Te) : ge(Te) : void 0
                }
            }
            if (h = oe(A), u = t.englishNumber ? F.year : K(F.year), M = de ? oe(de) : void 0, S = le ? oe(le) : void 0, I = X(F.month - 1, t.isGregorian) + " " + F.year.toString(), t.englishNumber || (I = K(I)), g = X(F.month - 1, t.isGregorian), t.yearOffset <= 0 && (ce = "disabled", Se = "disabled", fe = "disabled"), 6 != m) {
                t.isGregorian && m--;
                var Be = Z(F, -1, t.isGregorian);
                for (C = numberOfDaysInPreviousMonth - m; C <= numberOfDaysInPreviousMonth; C++) H = ie(Be.year, Be.month, C), Q = t.englishNumber ? De(C) : K(De(C)), Y = e("<td data-nm />").attr("data-number", H).html(Q), t.rangeSelector && (H == U || H == q ? Y.addClass("selected-range-days-start-end") : U > 0 && q > 0 && H > U && H < q && Y.addClass("selected-range-days")), t.isGregorian || 6 != G ? t.isGregorian && 0 == G && Y.addClass("text-danger") : Y.addClass("text-danger"), E.append(Y), k++, ++G >= 7 && (G = 0, O += E[0].outerHTML, isTrAppended = !0, E = e("<tr />"))
            }
            for (C = 1; C <= b; C++) {
                for (G >= 7 && (G = 0, O += E[0].outerHTML, isTrAppended = !0, E = e("<tr />")), H = ie(F.year, F.month, C), Q = t.englishNumber ? De(C) : K(De(C)), Y = e("<td data-day />").attr("data-number", H).html(Q), H == h && (Y.attr("data-today", ""), V || (V = te(G - 1 < 0 ? 0 : G - 1, t.isGregorian))), t.rangeSelector || P != H || (Y.attr("data-selectedday", ""), V = te(G - 1 < 0 ? 0 : G - 1, t.isGregorian)), w = 0; w < re.length; w++) if (re[w] == H) {
                    Y.addClass("text-danger");
                    break
                }
                if (t.isGregorian || 6 != G ? t.isGregorian && 0 == G && Y.addClass("text-danger") : Y.addClass("text-danger"), t.disableBeforeToday) for (H < h && Y.attr("disabled", ""), $ < h && (Me = "disabled"), R < h && (Se = "disabled"), j < h && (me = "disabled"), L < h && (ce = "disabled"), w = 1; w <= 12; w++) ee["month" + w.toString() + "DateNumber"] < h && (ee["selectMonth" + w.toString() + "ButtonCssClass"] = "disabled");
                if (t.disableAfterToday) for (H > h && Y.attr("disabled", ""), $ > h && (Me = "disabled"), R > h && (Se = "disabled"), j > h && (me = "disabled"), L > h && (ce = "disabled"), w = 1; w <= 12; w++) ee["month" + w.toString() + "DateNumber"] > h && (ee["selectMonth" + w.toString() + "ButtonCssClass"] = "disabled");
                if (S) for (H > S && Y.attr("disabled", ""), $ > S && (Me = "disabled"), R > S && (Se = "disabled"), j > S && (me = "disabled"), L > S && (ce = "disabled"), w = 1; w <= 12; w++) ee["month" + w.toString() + "DateNumber"] > S && (ee["selectMonth" + w.toString() + "ButtonCssClass"] = "disabled");
                if (M) for (H < M && Y.attr("disabled", ""), $ < M && (Me = "disabled"), R < M && (Se = "disabled"), j < M && (me = "disabled"), L < M && (ce = "disabled"), w = 1; w <= 12; w++) ee["month" + w.toString() + "DateNumber"] < M && (ee["selectMonth" + w.toString() + "ButtonCssClass"] = "disabled");
                for (w = 0; w < ne.length; w++) H == ne[w] && Y.attr("disabled", "");
                t.rangeSelector && (H == U || H == q ? Y.addClass("selected-range-days-start-end") : U > 0 && q > 0 && H > U && H < q && Y.addClass("selected-range-days")), E.append(Y), isTrAppended = !1, G++, k++
            }
            G >= 7 && (G = 0, O += E[0].outerHTML, isTrAppended = !0, E = e("<tr />"));
            var xe = Z(F, 1, t.isGregorian);
            for (C = 1; C <= 42 - k; C++) Q = t.englishNumber ? De(C) : K(De(C)), H = ie(xe.year, xe.month, C), Y = e("<td data-nm />").attr("data-number", H).html(Q), t.rangeSelector && (H == U || H == q ? Y.addClass("selected-range-days-start-end") : U > 0 && q > 0 && H > U && H < q && Y.addClass("selected-range-days")), t.isGregorian || 6 != G ? t.isGregorian && 0 == G && Y.addClass("text-danger") : Y.addClass("text-danger"), E.append(Y), ++G >= 7 && (G = 0, O += E[0].outerHTML, isTrAppended = !0, E = e("<tr />"));
            return isTrAppended || (O += E[0].outerHTML, isTrAppended = !0), l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = (l = l.replace(/{{currentMonthInfo}}/gim, I)).replace(/{{selectedYear}}/gim, u)).replace(/{{selectedMonthName}}/gim, g)).replace(/{{daysHtml}}/gim, O)).replace(/{{previousYearButtonDisabledAttribute}}/gim, ce)).replace(/{{previousYearButtonDateNumber}}/gim, L)).replace(/{{previousMonthButtonDisabledAttribute}}/gim, me)).replace(/{{previousMonthButtonDateNumber}}/gim, j)).replace(/{{selectYearButtonDisabledAttribute}}/gim, fe)).replace(/{{nextMonthButtonDisabledAttribute}}/gim, Me)).replace(/{{nextMonthButtonDateNumber}}/gim, $)).replace(/{{nextYearButtonDisabledAttribute}}/gim, Se)).replace(/{{nextYearButtonDateNumber}}/gim, R)).replace(/{{dropDownMenuMonth1DateNumber}}/gim, ee.month1DateNumber)).replace(/{{dropDownMenuMonth2DateNumber}}/gim, ee.month2DateNumber)).replace(/{{dropDownMenuMonth3DateNumber}}/gim, ee.month3DateNumber)).replace(/{{dropDownMenuMonth4DateNumber}}/gim, ee.month4DateNumber)).replace(/{{dropDownMenuMonth5DateNumber}}/gim, ee.month5DateNumber)).replace(/{{dropDownMenuMonth6DateNumber}}/gim, ee.month6DateNumber)).replace(/{{dropDownMenuMonth7DateNumber}}/gim, ee.month7DateNumber)).replace(/{{dropDownMenuMonth8DateNumber}}/gim, ee.month8DateNumber)).replace(/{{dropDownMenuMonth9DateNumber}}/gim, ee.month9DateNumber)).replace(/{{dropDownMenuMonth10DateNumber}}/gim, ee.month10DateNumber)).replace(/{{dropDownMenuMonth11DateNumber}}/gim, ee.month11DateNumber)).replace(/{{dropDownMenuMonth12DateNumber}}/gim, ee.month12DateNumber)).replace(/{{selectMonth1ButtonCssClass}}/gim, ee.selectMonth1ButtonCssClass)).replace(/{{selectMonth2ButtonCssClass}}/gim, ee.selectMonth2ButtonCssClass)).replace(/{{selectMonth3ButtonCssClass}}/gim, ee.selectMonth3ButtonCssClass)).replace(/{{selectMonth4ButtonCssClass}}/gim, ee.selectMonth4ButtonCssClass)).replace(/{{selectMonth5ButtonCssClass}}/gim, ee.selectMonth5ButtonCssClass)).replace(/{{selectMonth6ButtonCssClass}}/gim, ee.selectMonth6ButtonCssClass)).replace(/{{selectMonth7ButtonCssClass}}/gim, ee.selectMonth7ButtonCssClass)).replace(/{{selectMonth8ButtonCssClass}}/gim, ee.selectMonth8ButtonCssClass)).replace(/{{selectMonth9ButtonCssClass}}/gim, ee.selectMonth9ButtonCssClass)).replace(/{{selectMonth10ButtonCssClass}}/gim, ee.selectMonth10ButtonCssClass)).replace(/{{selectMonth11ButtonCssClass}}/gim, ee.selectMonth11ButtonCssClass)).replace(/{{selectMonth12ButtonCssClass}}/gim, ee.selectMonth12ButtonCssClass)
        }

        e(document).on("click", u + " [data-day]", function () {
            var t = e(this), a = t.attr("disabled"), r = Number(t.attr("data-number")), n = L(t),
                o = void 0 == n.selectedDate ? void 0 : ue(n.selectedDate), i = pe(n.selectedDateToShow);
            if (!a) {
                if (i = me(r, i, n), n.rangeSelector) return void 0 != n.rangeSelectorStartDate && void 0 != n.rangeSelectorEndDate && (n.rangeSelectorStartDate = void 0, n.rangeSelectorEndDate = void 0, t.parents("table:last").find("td.selected-range-days-start-end,td.selected-range-days").removeClass("selected-range-days").removeClass("selected-range-days-start-end")), void 0 == n.rangeSelectorStartDate ? (t.addClass("selected-range-days-start-end"), n.rangeSelectorStartDate = pe(i), n.selectedDate = pe(i), n.selectedDateToShow = pe(i)) : void 0 != n.rangeSelectorStartDate && void 0 == n.rangeSelectorEndDate && (t.addClass("selected-range-days-start-end"), n.rangeSelectorEndDate = pe(i), Q(n)), R(t, n), void (void 0 != n.rangeSelectorStartDate && void 0 != n.rangeSelectorEndDate && (n.inLine ? J(t, n) : ne(e(m))));
                n.selectedDate = pe(i), n.selectedDateToShow = pe(i), void 0 != o && (n.selectedDate.setHours(o.hour), n.selectedDate.setMinutes(o.minute), n.selectedDate.setSeconds(o.second)), R(t, n), Q(n), n.inLine ? J(t, n) : ne(e(m))
            }
        }), e(document).on("mouseenter", u + " [data-day]," + u + " [data-nm]," + u + " [data-pm]", function () {
            var t = e(this), a = t.parents("table:last").find("td[data-day]"), r = t.attr("disabled"),
                n = Number(t.attr("data-number")), o = L(t);
            if (!r && o.rangeSelector && (void 0 == o.rangeSelectorStartDate || void 0 == o.rangeSelectorEndDate)) {
                a.removeClass("selected-range-days");
                var i = o.rangeSelectorStartDate ? pe(o.rangeSelectorStartDate) : void 0,
                    s = o.rangeSelectorEndDate ? pe(o.rangeSelectorEndDate) : void 0, d = 0, l = 0;
                if (o.isGregorian ? (d = i ? se(i) : 0, l = s ? se(s) : 0) : (d = i ? oe(ge(i)) : 0, l = s ? oe(ge(s)) : 0), d > 0 && n > d) for (var c = d; c <= n; c++) a.filter('[data-number="' + c.toString() + '"]:not(.selected-range-days-start-end)').addClass("selected-range-days"); else if (l > 0 && n < l) for (var m = n; m <= l; m++) a.filter('[data-number="' + m.toString() + '"]:not(.selected-range-days-start-end)').addClass("selected-range-days")
            }
        }), e(document).on("click", u + " [data-changedatebutton]", function () {
            var t = e(this), a = t.attr("disabled"), r = Number(t.attr("data-number")), n = L(t),
                o = pe(n.selectedDateToShow);
            a || (o = me(r, o, n), n.selectedDateToShow = pe(o), R(t, n), J(t, n))
        }), e(document).on("blur", u + " input[data-clock]", function () {
            var t = e(this), a = t.parents(u + ":first"), r = a.find('input[type="text"][data-clock="hour"]'),
                n = a.find('input[type="text"][data-clock="minute"]'),
                o = a.find('input[type="text"][data-clock="second"]'), i = Number(r.val()), s = Number(n.val()),
                d = Number(o.val()), l = L(t);
            l.enableTimePicker && (void 0 == l.selectedDateToShow && (l.selectedDateToShow = new Date), i = z(i) ? i : l.selectedDateToShow.getHours(), s = z(s) ? s : l.selectedDateToShow.getMinutes(), d = z(d) ? d : l.selectedDateToShow.getSeconds(), void 0 == l.selectedDate && (l.selectedDate = new Date), l.selectedDate = new Date(l.selectedDate.setHours(i)), l.selectedDate = new Date(l.selectedDate.setMinutes(s)), l.selectedDate = new Date(l.selectedDate.setSeconds(d)), R(t, l), Q(l))
        }), e(document).on("click", u + " [select-year-button]", function () {
            e(this).parents(u + ":first").find(".select-year-box").removeClass("w-0")
        }), e(document).on("click", u + " [data-go-today]", function () {
            var t = e(this), a = L(t);
            a.selectedDateToShow = new Date, R(t, a), J(t, a)
        }), e("html").on("click", function (t) {
            h || ($(e(t.target)).length >= 1 || ne(e(m)))
        });
        var we = {
            init: function (t) {
                return this.each(function () {
                    var a = e(this), r = e.extend({
                        englishNumber: !1,
                        placement: "bottom",
                        trigger: "click",
                        enableTimePicker: !1,
                        targetTextSelector: "",
                        targetDateSelector: "",
                        toDate: !1,
                        fromDate: !1,
                        groupId: "",
                        disabled: !1,
                        textFormat: "",
                        dateFormat: "",
                        isGregorian: !1,
                        inLine: !1,
                        selectedDate: void 0,
                        selectedDateToShow: new Date,
                        monthsToShow: [0, 0],
                        yearOffset: 30,
                        holiDays: [],
                        disabledDates: [],
                        disableBeforeToday: !1,
                        disableAfterToday: !1,
                        disableBeforeDate: void 0,
                        disableAfterDate: void 0,
                        rangeSelector: !1,
                        rangeSelectorStartDate: void 0,
                        rangeSelectorEndDate: void 0
                    }, t);
                    if (a.attr("data-mdpersiandatetimepicker", ""), r.targetDateSelector) {
                        var n = e(r.targetDateSelector).val();
                        n && (r.selectedDate = new Date(Date.parse(n)), r.selectedDateToShow = pe(r.selectedDate))
                    } else if (r.targetTextSelector) {
                        var o = e(r.targetTextSelector).val();
                        o && (r.selectedDate = Me(o, r), r.selectedDateToShow = pe(r.selectedDate))
                    }
                    if (r.rangeSelector && (r.fromDate = !1, r.toDate = !1, r.enableTimePicker = !1), (r.fromDate || r.toDate) && r.groupId && (a.attr(c, r.groupId), r.toDate ? a.attr("data-toDate", "") : r.fromDate && a.attr("data-fromDate", "")), r.isGregorian && (r.englishNumber = !0), r.toDate && r.fromDate) throw new Error("MdPersianDateTimePicker => You can not set true 'toDate' and 'fromDate' together");
                    if (!r.groupId && (r.toDate || r.fromDate)) throw new Error("MdPersianDateTimePicker => When you set 'toDate' or 'fromDate' true, you have to set 'groupId'");
                    r.disable && a.attr("disabled", ""), r.enableTimePicker && !r.textFormat ? r.textFormat = "yyyy/MM/dd   HH:mm:ss" : r.enableTimePicker || r.textFormat || (r.textFormat = "yyyy/MM/dd"), r.enableTimePicker && !r.dateFormat ? r.dateFormat = "yyyy/MM/dd   HH:mm:ss" : r.enableTimePicker || r.dateFormat || (r.dateFormat = "yyyy/MM/dd"), a.data(g, r), void 0 != r.selectedDate && (Q(r), triggerChangeCalling = !1), r.inLine ? a.append(Se(r)) : a.popover({
                        container: "body",
                        content: "",
                        html: !0,
                        placement: r.placement,
                        title: " ",
                        trigger: "manual",
                        template: '\n<div class="popover mds-bootstrap-persian-datetime-picker-popover" role="tooltip" data-mdpersiandatetimepicker-popover>\n    <div class="arrow"></div>\n    <h3 class="popover-header text-center" data-name="mds-datetimepicker-title"></h3>\n    <div class="popover-body p-0" data-name="mds-datetimepicker-popoverbody"></div>\n</div>'
                    }).on(r.trigger, function () {
                        h = !0, a = e(this), (r = a.data(g)).disabled || (!function (t) {
                            e(m).each(function () {
                                var a = e(this);
                                !t && t.is(a) || ne(a)
                            })
                        }(a), function (e) {
                            e && e.popover("show")
                        }(a), setTimeout(function () {
                            r.selectedDateToShow = void 0 != r.selectedDate ? pe(r.selectedDate) : new Date;
                            var t = Se(r), n = e(t).find("[data-selecteddatestring]").text().trim();
                            e("#" + a.attr("aria-describedby")).find('[data-name="mds-datetimepicker-title"]').html(n), e("#" + a.attr("aria-describedby")).find('[data-name="mds-datetimepicker-popoverbody"]').html(t), a.popover("update"), h = !1
                        }, 10))
                    }), e(document).on("change", r.targetTextSelector, function () {
                        if (triggerChangeCalling) setTimeout(function () {
                            triggerChangeCalling = !1
                        }, 100); else {
                            var t = e(this).val();
                            if (t) try {
                                if (r.rangeSelector) {
                                    let e = t.split(" - ");
                                    a.MdPersianDateTimePicker("setDateRange", Me(e[0], r), Me(e[1], r))
                                } else a.MdPersianDateTimePicker("setDate", Me(t, r))
                            } catch (e) {
                                Q(r)
                            } else a.MdPersianDateTimePicker("clearDate")
                        }
                    })
                })
            }, getText: function () {
                return U(W(e(this)))
            }, getDate: function () {
                return W(e(this)).selectedDate
            }, getDateRange: function () {
                var t = W(e(this));
                if (t.rangeSelector) return [t.rangeSelectorStartDate, t.rangeSelectorEndDate];
                if (!t.toDate && !t.fromDate || !t.groupId) return [];
                var a = W(e("[" + c + '="' + t.groupId + '"][data-fromDate]')),
                    r = W(e("[" + c + '="' + t.groupId + '"][data-toDate]'));
                return [a.selectedDate, r.selectedDate]
            }, setDate: function (t) {
                if (void 0 == t) throw new Error("MdPersianDateTimePicker => setDate => مقدار ورودی نا معتبر است");
                var a = e(this), r = W(a);
                r.selectedDate = pe(t), _(a, r), Q(r)
            }, setOption: function (t, a) {
                if (!t) throw new Error("MdPersianDateTimePicker => setOption => name parameter مقدار ورودی نا معتبر است");
                var r = e(this), n = W(r);
                n[t] = a, _(r, n)
            }, setDateRange: function (t, a) {
                if (void 0 == t || void 0 == a) throw new Error("MdPersianDateTimePicker => setDateRange => مقدار ورودی نا معتبر است");
                if (t.getTime() >= a.getTime()) throw new Error("MdPersianDateTimePicker => setDateRange => مقدار ورودی نا معتبر است, تاریخ شروع باید بزرگتر از تاریخ پایان باشد");
                var r = e(this), n = W(r);
                if (n.rangeSelector) n.selectedDate = t, n.rangeSelectorStartDate = t, n.rangeSelectorEndDate = a, _(r, n), Q(n); else if ((n.fromDate || n.toDate) && n.groupId) {
                    var o = e("[" + c + '="' + n.groupId + '"][data-toDate]'),
                        i = e("[" + c + '="' + n.groupId + '"][data-fromDate]');
                    if (i.length > 0) {
                        var s = W(i);
                        s.selectedDate = t, _(i, s), Q(s)
                    }
                    if (o.length > 0) {
                        var d = W(o);
                        d.selectedDate = a, _(o, d), Q(d)
                    }
                }
            }, clearDate: function () {
                var t = e(this), a = W(t);
                a.selectedDate = void 0, _(t, a), Q(a)
            }, setDatePersian: function (t) {
                if (void 0 == t) throw new Error("MdPersianDateTimePicker => setDatePersian => ورودی باید از نوه جی سان با حداقل پراپرتی های year, month, day باشد");
                t.hour = t.hour ? t.hour : 0, t.minute = t.hour ? t.minute : 0, t.second = t.second ? t.second : 0;
                var a = e(this), r = W(a);
                r.selectedDate = le(t), _(a, r), Q(r)
            }, hide: function () {
                ne(e(this))
            }, show: function () {
                var t = W(e(this));
                e(this).trigger(t.trigger)
            }, disable: function (t) {
                var a = e(this), r = W(a);
                r.disabled = t, _(a, r), t ? a.attr("disabled", "") : a.removeAttr("disabled")
            }, changeType: function (t, a) {
                var r = e(this), n = W(r);
                ne(r), n.isGregorian = t, n.englishNumber = a, n.isGregorian && (n.englishNumber = !0), _(r, n), Q(n)
            }
        };
        e.fn.MdPersianDateTimePicker = function (t) {
            return we[t] ? we[t].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof t && t ? (e.error("Method " + t + " does not exist in jquery.Bootstrap-PersianDateTimePicker"), !1) : we.init.apply(this, arguments)
        }
    }(jQuery)
}]);
//# sourceMappingURL=jquery.md.bootstrap.datetimepicker.js.map