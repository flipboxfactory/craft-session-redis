<?php

namespace flipbox\craft\session;

use craft\behaviors\SessionBehavior;
use yii\redis\Session;

class Redis extends Session
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            SessionBehavior::class,
        ];
    }

    /**
     * @inheritdoc
     *
     * ---
     *
     * ```php
     * $message = Craft::$app->session->getFlash('notice', null, true);
     * ```
     * ```twig{1}
     * {% set message = craft.app.session.getFlash('notice', null, true) %}
     * {% if message %}
     *     <p class="notice">
     *         {{ message }}
     *     </p>
     * {% endif %}
     * ```
     */
    public function getFlash($key, $defaultValue = null, $delete = false)
    {
        return parent::getFlash($key, $defaultValue, $delete);
    }

    /**
     * @inheritdoc
     *
     * ---
     *
     * ```php
     * $messages = Craft::$app->session->getAllFlashes(true);
     * ```
     * ```twig{1}
     * {% set messages = craft.app.session.getAllFLashes(true) %}
     * {% for key, message in messages %}
     *     <p class="{{ key }}">
     *         {{ message }}
     *     </p>
     * {% endfor %}
     * ```
     */
    public function getAllFlashes($delete = false)
    {
        return parent::getAllFlashes($delete);
    }

    /**
     * @inheritdoc
     *
     * ---
     *
     * ```php
     * $hasNotice = Craft::$app->session->hasFlash('notice');
     * ```
     * ```twig{1}
     * {% if craft.app.session.hasFlash('notice') %}
     *     <p class="notice">
     *         {{ craft.app.session.getFlash('notice', null, true) }}
     *     </p>
     * {% endif %}
     * ```
     */
    public function hasFlash($key)
    {
        return parent::hasFlash($key);
    }
}
