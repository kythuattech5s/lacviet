function countDownDeal() {
    const timecoundown = document.querySelectorAll("[coundown-rs]");
    if (timecoundown.length == 0) {
        return false;
    }
    timecoundown.forEach(function (element) {
        const timeElement = setInterval(function () {
            var timeStart = element.dataset.start;
            var timeEnd = element.dataset.end;
            var dataStart = getValueTime(timeStart);
            var dataEnd = getValueTime(timeEnd);
            var startEventTime = new Date(dataStart.dateTimeArray[0]);
            var endEvent = new Date(dataEnd.dateTimeArray[0]);
            startEventTime = startEventTime.setHours(
                dataStart.hours,
                dataStart.minutes,
                dataStart.seconds
            );
            endEvent = endEvent.setHours(
                dataEnd.hours,
                dataEnd.minutes,
                dataEnd.seconds
            );
            var now = new Date();
            now = now.getTime();
            timeStart = startEventTime - now;
            timeEnd = endEvent - now;
            var showHour = element.querySelector("#hour");
            var showMinute = element.querySelector("#minute");
            var showSecond = element.querySelector("#second");
            var days = Math.floor(timeEnd / (1000 * 60 * 60 * 24));
            if (days > 0) {
                days = days + 1;
            }
            var hours =
                Math.floor(
                    (timeEnd % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                ) +
                days * 24;
            var minutes = Math.floor(
                (timeEnd % (1000 * 60 * 60)) / (1000 * 60)
            );
            var second = Math.floor((timeEnd % (1000 * 60)) / 1000);
            showHour.innerHTML =
                Number(hours) >= 10 ? hours : "0" + Number(hours);
            showMinute.innerHTML =
                Number(minutes) >= 10 ? minutes : "0" + Number(minutes);
            showSecond.innerHTML =
                Number(second) >= 10 ? second : "0" + Number(second);
            if (timeEnd <= 0) {
                if (element.hasAttribute("countdown-end")) {
                    CLICK.callFunction(element.dataset.func);
                }
                clearInterval(timeElement);
            }
        }, 1000);
    });
}

function getValueTime(dateTime) {
    var dateTimeArray = dateTime.split(" ");
    var hourMinuteSecond = dateTimeArray[1].split(":");
    var hours = hourMinuteSecond[0];
    var minutes = hourMinuteSecond[1];
    var seconds = hourMinuteSecond[2];
    return { dateTimeArray, hourMinuteSecond, hours, minutes, seconds };
}

function callFunction(func, options = []) {
    try {
        var arrayFunc = func.split(".");
        if (
            arrayFunc.length === 1 &&
            null != window[arrayFunc[0]] &&
            typeof window[arrayFunc[0]] === "function"
        ) {
            return (
                null != window[arrayFunc[0]] &&
                typeof window[arrayFunc[0]] === "function" &&
                window[arrayFunc[0]](...options)
            );
        } else if (arrayFunc.length === 2) {
            var obj = arrayFunc[0];
            func = arrayFunc[1];
            const classEval =
                typeof eval(`${obj}`) === "object"
                    ? eval(`${obj}`)
                    : eval(`new ${obj}()`);
            if (
                typeof classEval === "object" &&
                typeof classEval[func] === "function"
            ) {
                return (
                    typeof classEval[func] === "function" &&
                    classEval[func](...options)
                );
            } else if (
                window[obj] === "object" &&
                typeof window[obj][func] === "function"
            ) {
                return (
                    window[obj] === "object" &&
                    typeof window[obj][func] === "function" &&
                    window[obj][func](...options)
                );
            }
        }
    } catch (err) {
        console.log(err);
        alert(
            "Sửa lại data-success, Chưa đúng định dạng Object Function hoặc Class Function"
        );
    }
}
