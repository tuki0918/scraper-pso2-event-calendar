<?php

namespace App\Entity\Enum;

use App\Entity\Core\Enum;

class CampaignType extends Enum
{
    const BOOST = 'ブースト';
    const EMERGENCY = '緊急';
    const ARKSLEAGUE = 'アークスリーグ';
    const NETCAFE = 'ネットカフェ';
    const CASINO = 'カジノ';
    const CHALLENGE = 'チェレンジ';
    const LIVE = 'ライブ';
    const EVENTREWARD = 'イベント報酬';
    const UNKNOWN = 'unknown';

    /**
     * ブーストイベント
     * @return CampaignType
     */
    public static function Boost(): self
    {
        return new self(self::BOOST);
    }

    /**
     * 予告緊急クエスト
     * @return CampaignType
     */
    public static function Emergency(): self
    {
        return new self(self::EMERGENCY);
    }

    /**
     * アークスリーグ
     * @return CampaignType
     */
    public static function ArksLeague(): self
    {
        return new self(self::ARKSLEAGUE);
    }

    /**
     * 公認ネットカフェ
     * @return CampaignType
     */
    public static function NetCafe(): self
    {
        return new self(self::NETCAFE);
    }

    /**
     * カジノイベント
     * @return CampaignType
     */
    public static function Casino(): self
    {
        return new self(self::CASINO);
    }

    /**
     * チャレンジマイルアップイベント
     * @return CampaignType
     */
    public static function Challenge(): self
    {
        return new self(self::CHALLENGE);
    }

    /**
     * ライブイベント
     * @return CampaignType
     */
    public static function Live(): self
    {
        return new self(self::LIVE);
    }

    /**
     * イベント報酬
     * @return CampaignType
     */
    public static function EventReward(): self
    {
        return new self(self::EVENTREWARD);
    }

    /**
     * 未実装
     * @return CampaignType
     */
    public static function Unknown(): self
    {
        return new self(self::UNKNOWN);
    }
}
