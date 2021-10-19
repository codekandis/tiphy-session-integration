<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySessionIntegration\Configurations;

use CodeKandis\Configurations\AbstractConfiguration;
use CodeKandis\Session\Configurations\SessionsConfigurationInterface;

/**
 * Represents a sessions configuration.
 * @package codekandis/tiphy-sessions-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
class SessionsConfiguration extends AbstractConfiguration implements SessionsConfigurationInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function getOptions(): array
	{
		return $this->read( 'options' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getSavePath(): ?string
	{
		return $this->readOrDefault( 'savePath', null );
	}
}
