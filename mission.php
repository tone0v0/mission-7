<?php
function releaseBrakes(): void {
    echo "=== 特急列車 非常制動制御 ===\n";
    usleep(500000);

    // ==========================================
    // 【指示】下の1行を自分の担当トークンを追加せよ！
    // 担当A: $signal_a = "TRACK-CLEAR-";
    $signal_b = "BRAKE-APPLIED";
    $signal_a = ""; $signal_b = "";
    // ==========================================

    $combinedToken = $signal_a . $signal_b;

    if ($combinedToken === "TRACK-CLEAR-BRAKE-APPLIED") {
        echo "🛑 【停止完了】軌道信号とブレーキ圧が同期！車止め手前で完全停止！\n";
    } else {
        echo "⚠️ 【暴走継続】トークン不一致: [{$combinedToken}]\n";
        exit(1);
    }
}
releaseBrakes();
