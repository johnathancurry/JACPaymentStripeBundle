<?php

namespace JAC\Payment\StripeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Type for Paypal Express Checkout.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class StripeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }

    public function getName()
    {
        return 'stripe';
    }
}